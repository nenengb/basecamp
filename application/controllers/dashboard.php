<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Private_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model');
		$this->load->model('User_info');
		$this->load->model('Project_member');	
	}
	public function index()
	{
		$data = $this->Project_model->select();
		$data2 = $this->Project_member->getsharedproject();
		//var_dump($data2);
		$location = array(
			'view'	=> 'dashboard/index',
			'title'	=> 'Basecamp Dashboard',
			'data'	=> $data,
			'data2'	=> $data2
			);
		$this->load->view('template', $location);
	}
	public function project($action = FALSE, $id = FALSE)
	{
		if ((empty($action) == FALSE) && (empty($id) == FALSE)) 
		{
			$check = $this->Project_model->id_check($id);

			if (empty($check) == true) {
				header("location:".base_url()."dashboard/?error=2");
			}
			else{
				switch ($action) 
				{
					case 'edit':
						if ($_POST) {
							$this->Project_model->update($_POST,$id);
							header("location:".base_url()."dashboard");
						}
						else{
							$location = array(
								'view'	=> 'dashboard/addproject',
								'title'	=> 'Basecamp Dashboard',
								'edit'	=> true,
								'id'	=> $id,
								'name'	=> $check->pro_name,
								'description'	=> $check->pro_description
								);
							if ($check->status == 1) {
								$this->load->view('template', $location);
							}
							else{
								header("location:".base_url()."dashboard/?error=1");
							}
						}
						break;
					case 'delete':
						$this->Project_model->delete($id);
						header("location:".base_url()."dashboard");
						break;
					case 'view':
						header("location:".base_url()."project/view/".$id);
						break;
					case 'share':
						if ($_POST) {
							for ($i=0; $i<=2; $i++) { 
								if ((!empty($_POST['user'][$i]) == true) && ($_POST['user'][$i] != $this->email)) {
									$email = $this->User_info->checkmail($_POST['user'][$i]);
									if (!empty($email) == true) {
										$checker = $this->Project_member->check($id, $email->user_id);
										//var_dump($checker);
										if (empty($checker) == true) {
											$data = array(
												'mem_user'		=> $email->user_id,
												'mem_project'	=> $id
												);
											$this->Project_member->insert($data);
										}
									}
								}
							}
							header("location:".base_url()."dashboard");
						}
						else{
							$location = array(
								'view'	=> 'dashboard/share',
								'title'	=> 'Share Project',
								'status'=>	$check->status
								);
							$this->load->view('template', $location);
						}
						break;
					case 'status':
						if ($_POST) {
							$this->Project_model->status($_POST, $id);
							header("location:".base_url()."dashboard");
						}
						else{
							$location = array(
								'view'	=> 'dashboard/status',
								'title'	=> 'Status Basecamp',
								'status'=>	$check->status
								);
							$this->load->view('template', $location);
							}
						break;
					default:
						header("location:".base_url()."dashboard/project/add?error=2");
						break;
				}
			}
		}
		elseif (empty($action) == FALSE && $action == 'add') 
		{
			$location = array(
					'view'	=> 'dashboard/addproject',
					'title'	=> 'New Basecamp Project'
					);
				if ($_POST) {
					$data = array(
						'pro_name'			=> $_POST['pro_name'],
						'pro_description'	=> $_POST['pro_description'],
						'pro_owner'			=> $this->id,
						'pro_date'			=> date('Y/m/d')
						);
					$this->Project_model->insert($data);
					header("location:".base_url()."dashboard");
				}
				else{
					$this->load->view('template', $location);
				}
		}
		else
		{
			header("location:".base_url()."dashboard/project/add?error=2");
		}
	}
	
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discussion extends Private_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Discussion_model');
	}
	public function index()
	{
		header("location:".base_url(). "project/discussion/");
	}
	public function add($id = FALSE)
	{
		$location = array(
			'view'	=> 'discussion/add',
			'title'	=> 'Add Discussion'
			);
		//var_dump($data);
		if($id)
		{
			if ($_POST) {
				
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png|txt|zip|doc|pdf';
				$config['max_size']	= '400';
				$config['file_name'] = $this->id . "_" .rand(1,200000);
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload())
				{
					// $error = array('error' => $this->upload->display_errors());
					// var_dump($error);
					$data_all = array(
					'disc_subject'	=> $_POST['disc_subject'],
					'disc_message'	=> $_POST['disc_message'],
					'disc_user'		=> $this->id,
					'disc_project'	=> $id,
					'disc_date'		=> date("Y/m/d")
					);

					//var_dump($data_all);
					$this->Discussion_model->insert($data_all);
					header("location:".base_url(). "project/discussion/". $id);
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					
					$data_all = array(
					'disc_subject'	=> $_POST['disc_subject'],
					'disc_message'	=> $_POST['disc_message'],
					'disc_user'		=> $this->id,
					'disc_project'	=> $id,
					'disc_date'		=> date("Y/m/d"),
					'disc_file'		=> $data['upload_data']['file_name']
					);

					//var_dump($data_all);
					$this->Discussion_model->insert($data_all);
					header("location:".base_url(). "project/discussion/". $id);

				}
			}
			else{
				$this->load->view('template', $location);
			}
		}
		else{
		$this->load->view('template', $location);
		}
	}

	public function view($id = FALSE)
	{
		
	}
}
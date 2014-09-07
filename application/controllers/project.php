<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends Private_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model');
		$this->load->model('Project_member');
		$this->load->model('Discussion_model');
		$this->load->model('Todo_model');
		$this->load->helper('cookie');
	}

	public function index()
	{
		header("location:".base_url()."dashboard");
	}

	public function view($id = FALSE)
	{
		if ($id)
		{
			$check = $this->Project_model->id_check($id);
			$check2 = $this->Project_member->check($id, $this->id);
			if (!empty($check) == true || !empty($check2) == true) {
				$data = $this->Project_model->project_list($id);
				$user = $this->Todo_model->user($id);
				$user1 = $this->Todo_model->admin_user($id);
				$location = array(
					'view'	=> 'project/index',
					'title'	=> 'Project Home',
					'data'	=> $data,
					'user'	=> $user,
					'user1'	=> $user1
					);
				$this->load->view('template', $location);
			}
			else{
				header("location:".base_url()."dashboard");	
			}
		}
		else
		{
			header("location:".base_url()."dashboard");
		}
	}
	public function discussion($id = FALSE)
	{
		if ($id)
		{
			$check = $this->Project_model->id_check($id);
			$check2 = $this->Project_member->check($id, $this->id);
			if (!empty($check) == true || !empty($check2) == true) {
				$data = $this->Project_model->project_list($id);
				$data2 = $this->Discussion_model->select($id);
				$location = array(
					'view'	=> 'project/discussion',
					'title'	=> 'Discussion',
					'data'	=> $data,
					'data2'	=> $data2
					);
				//var_dump($location);
				$this->load->view('template', $location);
			}
			else{
				header("location:".base_url()."dashboard");	
			}
		}
		else
		{
			header("location:".base_url()."dashboard");
		}
	}
	public function todo($id = FALSE)
	{
		if ($id)
		{
			$todo = $this->Todo_model->select($id);
			$check = $this->Project_model->id_check($id);
			$user = $this->Todo_model->user($id);
			$user1 = $this->Todo_model->admin_user($id);
			$uri = $this->uri->segment(4);
			$location = array(
				'view'	=> 'project/todo',
				'title'	=> 'Project To-do List',
				'data'	=> $check,
				'todo'	=> $todo,
				'users'	=> $user,
				'user'	=> $user1,
				'id'	=> $id
				);
			if ($_POST) {
				if (get_cookie('todo_check') === 'true') {
					 //var_dump($_POST);
					 $this->Todo_model->todo_update($_POST);
					delete_cookie("todo_check");
					header("location:".base_url()."project/todo/".$id);
				}
				else{
					// $data = array(
					// 'todo_title'	=> $_POST['todo_title'],
					// 'todo_project'	=> $id
					// );
					//var_dump($_POST);
				$this->Todo_model->insert($_POST);
				header("location:".base_url()."project/todo/".$id);
				}
			}
			elseif (!empty($uri) == true) {
				$cookie = array(
                'name'   => 'todo_check',
                'expire' => time()+86500,
                'value'  => 'true'
                );
                set_cookie($cookie);
				$todo_sess = $this->Todo_model->select_todo($id, $uri);
				//var_dump($todo_sess);
				$location = array(
				'view'	=> 'project/todo1',
				'title'	=> 'Project To-do List',
				'data'	=> $check,
				'todo_sess'	=> $todo_sess,
				'users'	=> $user,
				'user'	=> $user1
				);
				$this->load->view('template', $location);
				//var_dump($location);
				
			}
			else{
				$this->load->view('template', $location);
				//var_dump($check);
			}
			
		}
		else
		{
			header("location:".base_url()."dashboard");
		}
	}
	public function file($id = FALSE)
	{
		if ($id)
		{
			$check = $this->Project_model->id_check($id);
			$location = array(
				'view'	=> 'project/file',
				'title'	=> 'Project Files',
				'data'	=> $check
				);
			$this->load->view('template', $location);
		}
		else
		{
			header("location:".base_url()."dashboard");
		}
	}
	public function text($id = FALSE)
	{
		if ($id)
		{
			$check = $this->Project_model->id_check($id);
			$location = array(
				'view'	=> 'project/text',
				'title'	=> 'Project Text Documents',
				'data'	=> $check
				);
			$this->load->view('template', $location);
		}
		else
		{
			header("location:".base_url()."dashboard");
		}
	}
	public function event($id = FALSE)
	{
		if ($id)
		{
			$check = $this->Project_model->id_check($id);
			$location = array(
				'view'	=> 'project/event',
				'title'	=> 'Project Events',
				'data'	=> $check
				);
			$this->load->view('template', $location);
		}
		else
		{
			header("location:".base_url()."dashboard");
		}
	}
}
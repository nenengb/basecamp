<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model');
	}

	public function index()
	{
		header("location:".base_url()."dashboard");
	}

	public function view($project_id = FALSE, $todo_id = FALSE)
	{
		if ($project_id && $todo_id) {
			$check = $this->Project_model->id_check($project_id);
			$location = array(
				'data'	=> $check,
				'view'	=> 'comment/index',
				'title'	=> 'Comments'
				);
			$this->load->view('template', $location);
		}
		else{
			header("location:".base_url()."dashboard");
		}
	}
	
	public function add($id = FALSE)
	{
		$location = array(
			'view'	=> 'comment/add',
			'title'	=> 'Comments'
			);
		$this->load->view('template', $location);
	}
	
}
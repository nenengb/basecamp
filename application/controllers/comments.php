<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends MY_Controller {

	public function index()
	{
		header("location:".base_url()."dashboard");
	}

	public function view($id = FALSE)
	{
		$location = array(
			'view'	=> 'comment/index',
			'title'	=> 'Comments'
			);
		$this->load->view('template', $location);
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
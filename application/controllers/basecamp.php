<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basecamp extends MY_Controller {

	public function index()
	{
		$location = array(
			'view'	=> 'index',
			'title'	=> 'Welcome to Basecamp'
			);
		$this->load->view('template', $location);
	}
	
}
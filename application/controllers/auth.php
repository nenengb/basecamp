<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_info');	
	}

	public function index()
	{
		header("location:".base_url()."auth/login");
	}

	public function login()
	{
		if ($_POST)
		{
			$login = $this->User_info->select($_POST);
			if (empty($login))
			{
				$location = array(
					'view'	=> 'auth/login',
					'title'	=> 'Login to Basecamp'
					);
				$this->load->view('template', $location);
			}
			else
			{
				$user_session = array(
							'id'		=>	$login->user_id,
							'email'		=>	$login->email,
							'logged_in'	=>	TRUE
					);
				$this->session->set_userdata($user_session);
				header("location:".base_url()."dashboard");
			}
		}
		else
		{
			$location = array(
				'view'	=> 'auth/login',
				'title'	=> 'Login to Basecamp'
				);
			$this->load->view('template', $location);
		}
	}

	public function signup()
	{
		if ($_POST)
		{
			$email = $this->User_info->checkmail($_POST['email']);
			if (empty($email)) {
				$location = array(
					'view'	=> 'auth/success',
					'title'	=> 'Success'
				);
				$this->User_info->insert($_POST);
				$this->load->view('template', $location);
			}
			else{
				$location = array(
					'view'	=> 'auth/signup',
					'title'	=> 'Error!',
					'error'	=> true,
					'fullname'	=> $_POST['fullname'],
					'company'	=> $_POST['company'],
					'email'	=> $_POST['email'],
					'password'	=> $_POST['password']
				);

				$this->load->view('template', $location);
			}
		}
		else
		{
			$location = array(
				'view'	=> 'auth/signup',
				'title'	=> 'Signup to Basecamp'
			);
			$this->load->view('template', $location);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		header("location:".base_url()."auth/login");
	}
	
}
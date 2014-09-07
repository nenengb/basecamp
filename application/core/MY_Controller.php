<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    // Fetch Session data
    protected $logged;
    public $id;
    public $email;
    function __construct()
    {
        parent::__construct();
        $this->logged = $this->session->userdata('logged_in');
        $this->id = $this->session->userdata('id');
        $this->email = $this->session->userdata('email');
    }
}

class Private_Controller extends MY_Controller
{
    /*
    * Checks if the user is currently logged in.
    * Available only for private pages like account and etc.
    */
    function __construct()
    {
        parent::__construct();

        if(!(int) $this->logged > 0)
        {
          header("location:".base_url()."auth/login");
        }
    }
}

class Public_Controller extends MY_Controller
{
    /*
    * Checks if the user is currently logged in.
    * Available only for public pages like the homepage, login and signup.
    */
    function __construct()
    {
        parent::__construct();

        if((int) $this->logged > 0)
        {
          header("location:".base_url()."dashboard");
        }
    }
}

?>
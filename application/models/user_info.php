<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_info extends MY_Model {

	protected $table = 'user_info';
	protected $primarykey = 'user_id';
	
	function __construct(){
		parent::__construct();
	}

	public function checkmail($email)
	{
		return $this->db->select("*")
              ->from($this->table)
              ->where('email', $email)
              ->get()->row_object();
	}

	public function select($data)
	{
		return $this->db->select("*")
              ->from($this->table)
              ->where('email', $data['email'])
              ->where('password', $data['password'])
              ->get()->row_object();
	}

}
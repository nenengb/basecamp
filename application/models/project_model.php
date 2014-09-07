<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends MY_Model {

	protected $table = 'project';
	protected $primarykey = 'pro_id';

	public function __construct()
    {	
        parent::__construct();
    }

	public function select()
	{
		return $this->db->select("*")
              ->from($this->table)
              ->where('pro_owner', $this->id)
              ->get()->result_object();
	}

	public function id_check($id)
	{
		return $this->db->select("*")
              ->from($this->table)
              ->where('pro_id', $id)
              ->get()->row_object();
	}

	public function status($stat, $id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->table, $stat); 
	}

	public function project_list($id)
	{
		return $this->db->select("*")
              ->from($this->table)
              ->join('user_info', 'user_info.user_id = '.$this->table.'.pro_owner')
              ->where('pro_id', $id)
              ->get()->row_object();
	}

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Model extends CI_Model {

	protected $table;
	protected $primarykey;

	public function __construct()
    {	
        parent::__construct();
    }

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->delete($this->table); 
	}

	public function update($data, $id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->table, $data); 
	}

	public function select($id)
	{
		return $this->db->select("*")
              ->from($this->table)
              ->where($this->primarykey, $id)
              ->get()->result_object();
	}

}
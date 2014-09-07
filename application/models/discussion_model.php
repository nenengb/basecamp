<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discussion_model extends MY_Model {

  protected $table = 'discussion';
  protected $primarykey = 'disc_id';

  public function __construct()
    { 
        parent::__construct();
    }

    public function select($id)
  {
    return $this->db->select("*")
              ->from($this->table)
              ->where('disc_project', $id)
              ->get()->result_object();
  }

}
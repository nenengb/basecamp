<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_member extends MY_Model {

  protected $table = 'project_member';
  protected $primarykey = 'mem_id';

  public function __construct()
    { 
        parent::__construct();
    }

    public function check($proj_id, $user_id)
    {
      return $this->db->select("*")
              ->from($this->table)
              ->where('mem_project', $proj_id)
              ->where('mem_user', $user_id)
              ->get()->row_object();
    }

    public function getsharedproject()
    {
      return $this->db->select("*")
              ->from($this->table)
              ->join('project', 'project.pro_id = '.$this->table.'.mem_project')
              ->where('mem_user', $this->id)
              ->get()->result_object();
    }

}
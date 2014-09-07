<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_model extends MY_Model {

  protected $table = 'todo';
  protected $primarykey = 'todo_id';

  public function __construct()
    { 
        parent::__construct();
    }

    public function insert($data)
    {
      $this->db->insert($this->table, $data);
    }
    public function select($id)
    {
      return $this->db->select("*")
              ->from($this->table)
              ->where('todo_project', $id)
              ->get()->result_object();
    }
    public function user($id)
    {
      return $this->db->select("fullname")
              ->from("project_member")
              ->join('user_info', 'user_info.user_id = project_member.mem_user')
              ->where('mem_project', $id)
              ->get()->result_object();
    }
    public function admin_user($id)
    {
      return $this->db->select("fullname")
              ->from("project")
              ->join('user_info', 'user_info.user_id = project.pro_owner')
              ->where('pro_id', $id)
              ->get()->result_object();
    }
    public function select_todo($id, $todo)
    {
      return $this->db->select("*")
              ->from($this->table)
              ->where('todo_project', $id)
              ->where('todo_id', $todo)
              ->get()->result_object();
    }
    public function todo_update($data)
    {
    $this->db->where('todo_id', $data['todo_id']);
    unset($data['id']);
    $this->db->update($this->table, $data);
    }

}
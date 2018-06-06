<?php

class Login_model extends CI_Model{
	public function __construct(){
		parent::__construct();

	}


	public function auth_member($table, $where)
  {
		return $this->db->get_where($table, $where);
	}

  public function auth_user($table, $where){
    return $this->db->get_where($table, $where);
  }


}

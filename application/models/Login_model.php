<?php

class Login_model extends CI_Model{
	public function __construct(){
		parent::__construct();

	}

	function get_data()
	{
		$this->db->select('user. *, biodata_data. *');
		$this->db->from('user');
		$this->db->join('biodata_data', 'biodata_data.id_biodata = user.id_biodata');
		$this->db->join('data_users', 'data_users.id_users = data_booking.id_users');
		// $this->db->join('groups', 'groups.id = data_users.id_groups  ');
		// $this->datatables->add_column('view', '<a href="world/edit/$1">edit</a> | <a href="world/delete/$1">delete</a>', 'id_booking');
		// return $this->datatables->generate();
		$data = $this->db->get()->result();
		return $data;
	}

	public function auth_member($table, $where)
  {
		return $this->db->get_where($table, $where);
	}

  public function auth_user($table, $where)
	{
    return $this->db->get_where($table, $where);
  }


}

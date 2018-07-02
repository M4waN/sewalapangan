<?php

class Members_model extends CI_Model{
	public function __construct(){
		parent::__construct();

	}


	public function ambil_data()
	{

		return $this->db->get('data_member');
	}
	public function wheredata($table, $where)
	{
		$this->db->select($table);
		$this->db->where($where);
	}

	public 	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}



}

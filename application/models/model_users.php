<?php

class Model_users extends CI_Model{
	public function __construct(){
		parent::__construct();

	}


	public function ambil_data(){
		$this->db->select('user.username , user.id_biodata, user.level, user.id_users	, biodata_users. *');
		$this->db->from('biodata_users');
		$this->db->join('user', 'user.id_biodata = biodata_users.id_biodata');


		return $this->db->get();
	}

	public function get_datamember(){


		$this->datatables->select('*');
		$this->datatables->from('biodata_users');
		return $this->datatables->generate();
	}

	public 	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function delete($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


}

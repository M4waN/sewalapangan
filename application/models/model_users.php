<?php 

class Model_users extends CI_Model{
	public function __construct(){
		parent::__construct();		
		
	}


	public function ambil_data(){

		return $this->db->get('data_users');
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
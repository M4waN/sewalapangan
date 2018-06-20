<?php

class Model_lapangan extends CI_Model{
	public function __construct(){
		parent::__construct();

	}


	public function ambil_data(){
		$this->db->select('data_lapangan. *, jenis_lapangan.*');
		$this->db->from('data_lapangan');
		$this->db->join('jenis_lapangan', 'jenis_lapangan.id_jenis_lapangan = data_lapangan.id_jenis_lapangan', 'left');
		// return $this->db->get('data_booking')->result();
		// $this->db->join('groups', 'groups.id = data_users.id_groups  ');
		// $this->datatables->add_column('view', '<a href="world/edit/$1">edit</a> | <a href="world/delete/$1">delete</a>', 'id_booking');
		// return $this->datatables->generate();
		$data = $this->db->get();
		return $data;
		// return $this->db->get('data_lapangan');
	}
	public function getid_jenislapangan()
	{
			return $this->db->get('jenis_lapangan');
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

<?php

class Pemesanan_model extends CI_Model{
	public function __construct(){
		parent::__construct();
    $this->load->library('datatables');
	}


	public function getData(){
    $this->db->select('data_booking. *, data_users. *, data_lapangan. *, groups.name');
		$this->db->from('data_booking');
    $this->db->join('data_lapangan', 'data_lapangan.id_lapangan = data_booking.id_lapangan');
    $this->db->join('data_users', 'data_users.id_users = data_booking.id_users');
    $this->db->join('groups', 'groups.id = data_users.id_groups  ');
    // $this->datatables->add_column('view', '<a href="world/edit/$1">edit</a> | <a href="world/delete/$1">delete</a>', 'id_booking');
    // return $this->datatables->generate();
    $data = $this->db->get()->result();
    return $data;

	}

	public function get_datamember(){


		$this->datatables->select('*');
		$this->datatables->from('datauser');
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

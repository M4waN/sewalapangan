<?php

class Laporan_model extends CI_Model{
	public function __construct(){
		parent::__construct();
    $this->load->library('datatables');
	}


	public function getData(){
    $this->db->select('data_transaksi. *, data_booking.*, data_member. *, data_lapangan.*');
		$this->db->from('data_transaksi');
    $this->db->join('data_booking', 'data_booking.id_booking = data_transaksi.id_booking');
    $this->db->join('data_lapangan', 'data_lapangan.id_lapangan = data_booking.id_lapangan ');
    $this->db->join('data_member', 'data_member.id_member = data_booking.id_member');
		// return $this->db->get('data_booking')->result();
    // $this->db->join('groups', 'groups.id = data_users.id_groups  ');
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

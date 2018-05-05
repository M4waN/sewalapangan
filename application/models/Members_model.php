<?php 

class Model_users extends CI_Model{
	public function __construct(){
		parent::__construct();		
		
	}


	public function ambil_data(){

		return $this->db->get('data_users');
	}
	


}
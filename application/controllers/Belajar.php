<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('model_users');
	}

	public function user(){
		$data['user'] = $this->model_users->ambil_data()->result();
		$this->load->view('pages/v_users.php',$data);
	}

}
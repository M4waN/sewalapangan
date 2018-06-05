<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Members_model');
		 $this->load->library('datatables');
		$this->load->model('model_users');
		
	}

	public function index()
	{
		$data = [
			'active_controller' => 'member',
			'active_function' => 'data_member',
			'data' => [
				'getdata' => $this->model_users->ambil_data()->result(),
				'pagename' => 'Data Member'
			]
		];
		
		$this->load->view('adminlte2/global/template', $data);
	}

	public function get_datamember_json()
	{
		
		header('Content-Type: application/json');
    echo $this->model_users->get_datamember();
  }
}

	// function dumping(){
	// 	INSERT INTO `data_users` (`id_users`, `id_groups`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `remember_code`, `created_at`, `update_at`, `last_login`) VALUES ('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL)
	// }

	
    


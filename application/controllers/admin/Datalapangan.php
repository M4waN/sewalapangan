<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalapangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_lapangan');
		
	}

	// public function index()
	// {
	// 	$data = [
	// 		'active_controller' => 'member',
	// 		'active_function' => 'data_member',
	// 		'user' => [
	// 			'datauser' => $this->model_users->ambil_data()->result()
	// 		]
	// 	];
		
	// 	$this->load->view('adminlte2/global/template', $data);
	// }

	public function index()
	{
		$data = [
			'active_controller' => 'datalapangan',
			'active_function' => 'data_lapangan',
			'data' => [
				'getdata' => $this->model_lapangan->ambil_data()->result(),
				'pagename' => 'Data Lapangan'
			]
		];
		
		$this->load->view('adminlte2/global/template', $data);
	}

	// public function get_datalapangan_json()
	// {
	// 	$this->load->library('datatables');
	// 	$this->datatables->select('*');
	// 	$this->datatables->from('data_users');
	// 	return print_r($this->datatables->generate());
	// }

	
    
}

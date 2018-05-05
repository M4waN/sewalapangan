<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Members_model');
		
	}

	public function index()
	{
		$data = [
			'active_controller' => 'member',
			'active_function' => 'data_member'

		];
		$this->load->view('adminlte2/global/template', $data);
	}

	public function get_datamember_json()
	{
		$this->load->library('datatables');
		$this->datatables->select('*');
		$this->datatables->from('data_users');
		return print_r($this->datatables->generate());
	}

	
    
}

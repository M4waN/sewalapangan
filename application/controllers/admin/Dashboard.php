<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('status') != 'login_user')
		{
			redirect(base_url('auth/admin_login'));
		}
	}

	public function index()
	{
		$data = [
			'active_controller' => 'dashboard',
			'active_function' => 'index'

		];
		$this->load->view('adminlte2/global/template', $data);

	}
	function changeprofil()
	{
		$data = [
			'active_controller' => 'dashboard',
			'active_function' => 'change_profil',
			// 'getdata' => $this->model_lapangan->ambil_data()->result(),
			'data' => [
				'getdata' => $this->model_lapangan->ambil_data()->result(),
				'pagename' => 'Data Lapangan'
			]
		];
// $this->load->view('adminlte2/datalapangan/data_lapangan', $data);
		$this->load->view('adminlte2/global/template', $data);
	}
}

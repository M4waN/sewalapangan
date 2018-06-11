 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->model('Pemesanan_model');
    $this->load->library(array('datatables', 'session'));
		if ($this->session->userdata('status') != 'login_user')
		{
			redirect(base_url('login/admin_login'));
  	}

	}

	public function index()
	{
		$data = [
			'active_controller' => 'datapemesanan',
			'active_function' => 'data_booking',
      'data' => [
				'getdata' => $this->Pemesanan_model->getData(),
				'pagename' => 'Data Pemesanan'
			]

		];
		$this->load->view('adminlte2/global/template', $data);
	}

  function JSON()
  {
    header('Content-Type: application/json');
    return $this->Pemesanan_model->getData();
  }
}

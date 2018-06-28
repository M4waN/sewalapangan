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
			redirect(base_url('auth/admin_login'));
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

  public function delete()
  {
    $id_booking = $this->input->post('id_booking');
    if($id_booking == ""){
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf Data gagal dihapus!!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/datapemesanan');
    }else{
    $where = array('id_booking' => $id_booking);
    $this->Pemesanan_model->delete($where, 'data_booking');
    $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapuskan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/datapemesanan');
    }
  }


  function JSON()
  {
    header('Content-Type: application/json');
    return $this->Pemesanan_model->getData();
  }
}

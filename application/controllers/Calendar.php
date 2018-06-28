<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('Model_jadwal');
			$this->load->model('Model_lapangan');
			$this->load->model('Pemesanan_model');
			$this->load->library(array('form_validation', 'session', 'HelpTool'));
			$this->load->helper(array('url', 'language'));
			if ($this->session->userdata('status') != 'login_member')
			{
				redirect(base_url(''));
			}
		}


	function index()
	{
		$data = [
			'getdata_lapangan' => $this->Model_lapangan->ambil_data()->result(),
			'getdata_pemesanan' => $this->Pemesanan_model->getData(),
			// 'getdata_jenislapangan' => $this->model_lapangan->getid_jenislapangan()->result(),
			'pagename' => 'Data Lapangan'
		];
		$this->load->view('indextemplate/01_head');

		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		// $this->load->view('pages/jadwal/jadwal');
		$this->load->view('pages/jadwal/column-grouping', $data);
		$this->load->view('indextemplate/03_footer');

		$this->load->view('indextemplate/04_foot');
		$this->load->view('pages/users/login_form');
		// $this->load->view('pages/jadwal/fcalendarscript');
    // $this->load->view('pages/jadwal/home');

	}
	function test()
	{
		$data = [
			'getdata_lapangan' => $this->model_lapangan->ambil_data()->result(),
			'getdata_pemesanan' => $this->Pemesanan_model->getData(),
			// 'getdata_jenislapangan' => $this->model_lapangan->getid_jenislapangan()->result(),
			'pagename' => 'Data Lapangan'
		];
		$this->load->view('pages/jadwal/column-grouping', $data);
	}

  Public function getEvents()
	{
    $data = array();
		$result=$this->Model_jadwal->getEvents();
    foreach ($result as $u) {
      // $data[] = array(
      //   'title' => 'test',
      //   'description' => 'tests',
      //   // 'color' => '#F2F2F2',
			// 	'resourceId' => $u->id_lapangan,
      //   'start' => $u->waktu_mulai ,
      //   'end' => $u->waktu_selesai
      //  );
			$data[] = array(
				'id' => $u->id_booking,
				'resourceId' => $u->id_lapangan,
				'title' => 'test',
				'start' => $u->waktu_mulai,
				'end' => $u->waktu_selesai,
				'color' => 'f2f2f2'
			);
    }
		echo json_encode($data);
	}
	public function getResources()
	{
		$data = array();
		$result = $this->Model_lapangan->ambil_data()->result();
		foreach($result as $u){
			$data[] = array(
				'id' => $u->id_lapangan,
				'building' => $u->nama_jenis_lapangan,
				'title' => $u->nama_lapangan,
				'tarif' => $this->helptool->rupiah($u->harga_lapangan),

				// 'businessHours' => [
				// 	// 'dow' => '[1,2,3,4,5]',
				// 	'start' => '08:00',
				// 	'end' => '22:00',
				// 	'color' => 'red',
				// 	'background' => 'red'
				// 	],


			);

		}
		echo json_encode($data);
	}

  /*Add new event */
Public function addEvent()
{
  $result=$this->Model_jadwal->addEvent();
  echo $result;
}
/*Update Event */
Public function updateEvent()
{
  $result=$this->Model_jadwal->updateEvent();
  echo $result;
}
/*Delete Event*/
Public function deleteEvent()
{
  $result=$this->Model_jadwal->deleteEvent();
  echo $result;
}
Public function dragUpdateEvent()
{

  $result=$this->Model_jadwal->dragUpdateEvent();
  echo $result;
}



}

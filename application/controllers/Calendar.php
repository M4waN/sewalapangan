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
			if ($this->session->userdata('status_login') !== 'login_member')
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
		$this->load->view('pages/users/login_form');
		// $this->load->view('pages/jadwal/jadwal');
		$this->load->view('pages/jadwal/column-grouping', $data);
		$this->load->view('indextemplate/03_footer');

		$this->load->view('indextemplate/04_foot');

		// $this->load->view('pages/jadwal/fcalendarscript');
    // $this->load->view('pages/jadwal/home');

	}

	function pembayaran()
	{
		$this->load->view('indextemplate/01_head');

		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/users/login_form');
		$this->load->view('pages/jadwal/rincian_pesanan.php');
		$this->load->view('indextemplate/03_footer');

		$this->load->view('indextemplate/04_foot');
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
				'title' => 'Booked',

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
				'tarif_nonrp' => $u->harga_lapangan,
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
Public function add_pesanan()
{

	$this->form_validation->set_rules('id_lapangan','id_lapangan', 'required');
	$this->form_validation->set_rules('duration_time', 'duration_time', 'required');
	$this->form_validation->set_rules('total_tarif_nonrp','total_tarif_nonrp','required');

	// $this->form_validation->set_rules('phone','Phone','required');
	// $this->form_validation->set_rules('email','Email','required');


	if($this->form_validation->run() != false){
				$tgl = date("Y-m-d H:i:s");

				// $username = $this->input->post('username');
				// $password = $this->input->post('password');
				// $level = $this->input->post('level');

				$id_member = $this->session->userdata('id_member');
				$id_lapangan = $this->input->post('id_lapangan');
				$tanggal_sewa =  $this->input->post('tanggal_sewa');
				$waktu_mulai = $this->input->post('waktu_mulai');
				$duration_time = $this->input->post('duration_time') * 60;

				$timestamp = $tanggal_sewa." ".$waktu_mulai;
				$waktu_selesai = date('Y-m-d H:i:s', strtotime( '+'.$duration_time. 'minute' , strtotime($timestamp)));
				// $phone = $this->input->post('phone');
				// $id_biodata = md5($username. $tgl);
				$id_booking = md5($id_member. $id_lapangan . $tgl);
				$id_transaksi = md5($id_booking.$tgl);
				$total_tarif = $this->input->post('total_tarif_nonrp');

				// $username = $this->input->post('username');
				// $password = $this->input->post('password');
				// $level = $this->input->post('level');



				$data = array(
					'id_booking' => $id_booking,
					'id_member' => $id_member,
					'id_lapangan' => $id_lapangan	,
					'waktu_mulai' => $timestamp,
					'waktu_selesai' => $waktu_selesai,
					'duration_time' => $duration_time,
					// 'id_jenis_lapangan' => ucwords($jenis_lapangan),
					// 'harga_lapangan' => $harga_lapangan,
					// 'phone' => $phone,
					// 'images_lapangan' => NULL,
					'created_at'=> $tgl,
					'status' => 'belum_bayar'
					// 'updated_at' => NULL
				);

				$invoice = array(
					'$id_transaksi' => $id_transaksi,
					'id_booking' => $id_booking,
					'total_terbayar' => $total_terbayar,
					'total_tarif' => $total_tarif,
					'level' => 'member',
					'created_at'=> $tgl,
					'updated_at' => NULL
			 );

			  $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				$this->Pemesanan_model->input_data($data, 'data_booking');
				// $this->model_users->input_data($datauser,'user');

				redirect(base_url('calendar'));

			}
			else{
				 $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf data gagal ditambahkan !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect(base_url('calendar'));
				// $this->load->view('pages/users/register_form');
			}


  // $result=$this->Model_jadwal->addEvent();
  // echo $result;
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

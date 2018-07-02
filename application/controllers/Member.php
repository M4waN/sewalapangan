<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model(array('Members_model','Model_jadwal', 'Model_lapangan', 'Pemesanan_model','Laporan_model'));


			$this->load->library(array('form_validation', 'session', 'HelpTool', 'upload'));
			$this->load->helper(array('url', 'language'));
			if ($this->session->userdata('status_login') !== 'login_member')
			{
				redirect(base_url(''));
			}


		}


	function jadwal()
	{
		$data = [
			'getdata_lapangan' => $this->Model_lapangan->ambil_data()->result(),
			'getdata_pemesanan' => $this->Pemesanan_model->getData(),
			// 'getdata_jenislapangan' => $this->model_lapangan->getid_jenislapangan()->result(),
			'pagename' => 'Data Lapangan'
		];
		$this->load->view('index/head');

		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/users/login_form');
		// $this->load->view('pages/jadwal/jadwal');
		$this->load->view('pages/jadwal/column-grouping', $data);
		$this->load->view('index/footer');

		$this->load->view('index/foot');

		// $this->load->view('pages/jadwal/fcalendarscript');
    // $this->load->view('pages/jadwal/home');

	}

	function profile()
	{
		$this->session->set_flashdata('active','profile');
		$this->load->view('index/head');

		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/users/login_form');
		$this->load->view('pages/users/sidebar.php');
		$this->load->view('pages/users/profile.php');
		$this->load->view('index/footer');

		$this->load->view('index/foot');
	}

	function pembayaran()
	{
		$this->session->set_flashdata('active','pembayaran');
		$date = date('Y-m-d H:i:s');
		$expdate =$this->session->userdata('expdate');
		if(isset($expdate) == TRUE){
			if(strtotime($date) >= strtotime($expdate))
			{
				$unset = array('id_transaksi' ,'expdate');
				$this->session->unset_userdata($unset);
			}
		}
		$id_transaksi = $this->session->userdata('id_transaksi');
		$dataparse = array();
		if(isset($id_transaksi))
		{
			$dataparse = [

				'getDatabyId' => $this->Laporan_model->getDatabyId($id_transaksi)

			];
		}



		$this->load->view('index/head');

		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/users/login_form');
		$this->load->view('pages/users/sidebar.php');
		$this->load->view('pages/jadwal/rincian_pesanan.php', $dataparse);
		$this->load->view('index/footer');

		$this->load->view('index/foot');
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
public function add_bukti()
{
	$config['upload_path'] =  base_url() . '/assets/images/'; //path folder
	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	$config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

	$this->upload->initialize($config);
	if(!empty($_FILES['filefoto']['name'])){

		 if ($this->upload->do_upload('filefoto')){
				 $gbr = $this->upload->data();
				 //Compress Image
				 $config['image_library']='gd2';
				 $config['source_image']='./assets/images/'.$gbr['file_name'];
				 $config['create_thumb']= FALSE;
				 $config['maintain_ratio']= FALSE;
				 $config['quality']= '50%';
				 $config['width']= 600;
				 $config['height']= 400;
				 $config['new_image']= './assets/images/'.$gbr['file_name'];
				 $this->load->library('image_lib', $config);
				 $this->image_lib->resize();

				 $gambar=$gbr['file_name'];
				 $judul=$this->input->post('xjudul');

				 $data = array(
					 'judul' => $judul,
					 'gambar' => $gambar
				 );

				 $this->Pemesanan_model->input_data('konfirmasi_pembayaran', $data);
				 $this->session->set->set_flashdata("success" ,"Bukti berhasil diupload, silahkan tunggu konfirmasi.");
				 redirect(base_url('member/pembayaran'));

		 }

		 else{
			 $this->session->set_flashdata("failed_msg" , "Gagal kosong");
			 redirect(base_url('member/pembayaran'));
		 }

	}else{
		redirect(base_url('member/pembayaran'));
		 $this->session->set_flashdata("failed_msg" , "Image yang diupload kosong");
}
	// end uploadgambar
}

Public function add_pesanan()
{

	$this->form_validation->set_rules('id_lapangan','id_lapangan', 'required');
	$this->form_validation->set_rules('duration_time', 'duration_time', 'required');
	$this->form_validation->set_rules('total_tarif_nonrp','total_tarif_nonrp','required');

	// $this->form_validation->set_rules('phone','Phone','required');
	// $this->form_validation->set_rules('email','Email','required');


	if($this->form_validation->run() != false){
				$tgl = date("Y-m-d H:i:s");


				// uploadgambar


				// $username = $this->input->post('username');
				// $password = $this->input->post('password');
				// $level = $this->input->post('level');

				$id_member = $this->session->userdata('id_member');
				$id_lapangan = $this->input->post('id_lapangan');
				// $tanggal_sewa =  $this->input->post('tanggal_sewa');
				$waktu_mulai = $this->input->post('waktu_mulai');
				$duration_time = $this->input->post('duration_time') * 60;

				// $timestamp = $tanggal_sewa." ".$waktu_mulai;
				$waktu_selesai = date('Y-m-d H:i:s', strtotime( '+'.$duration_time. 'minute' , strtotime($waktu_mulai)));
				// $phone = $this->input->post('phone');
				// $id_biodata = md5($username. $tgl);
				$id_booking = md5($id_member. $id_lapangan . $tgl);
				$id_transaksi = md5($id_booking.$tgl);
				$total_tarif = $this->input->post('total_tarif_nonrp');
				$expdate = date('Y-m-d H:i:s', strtotime( '+ 3 hour', strtotime($tgl) ));
				$total_terbayar = '';

				// $username = $this->input->post('username');
				// $password = $this->input->post('password');
				// $level = $this->input->post('level');



				$data = array(
					'id_booking' => $id_booking,
					'id_member' => $id_member,
					'id_lapangan' => $id_lapangan	,
					'waktu_mulai' => $waktu_mulai,
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
					'id_transaksi' => $id_transaksi,
					'id_booking' => $id_booking,
					'total_terbayar' => $total_terbayar,
					'total_tarif' => $total_tarif,
					'status'=> '',
					'tgl_transaksi'=> $tgl,
					'updated_at' => NULL
			 );

			 $reqdata = array(
				 'id_transaksi' => $id_transaksi,
				 'expdate' => $expdate,
			 );

			 $this->session->set_userdata($reqdata);
			  $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				$this->Pemesanan_model->input_data($data, 'data_booking');
				$this->Laporan_model->input_data($invoice, 'data_transaksi');
				// $this->model_users->input_data($datauser,'user');

				redirect(base_url('member/pembayaran'));

			}
			else{
				 $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf data gagal ditambahkan !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect(base_url('member/jadwal'));
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

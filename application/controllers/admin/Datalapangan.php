<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalapangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_lapangan');
		$this->load->library(array('form_validation', 'session','HelpTool'));
		if ($this->session->userdata('status') != 'login_user')
		{
			redirect(base_url('auth/admin_login'));
  	}

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
			// 'getdata' => $this->model_lapangan->ambil_data()->result(),
			'data' => [
				'getdata' => $this->model_lapangan->ambil_data()->result(),
				'getdata_jenislapangan' => $this->model_lapangan->getid_jenislapangan()->result(),
				'pagename' => 'Data Lapangan'
			]
		];
// $this->load->view('adminlte2/datalapangan/data_lapangan', $data);
		$this->load->view('adminlte2/global/template', $data);
	}

	public function jenis_lapangan()
	{

		$data = [
			'active_controller' => 'datalapangan',
			'active_function' => 'jenis_lapangan',
			// 'getdata' => $this->model_lapangan->ambil_data()->result(),
			'data' => [
				'getdata' => $this->model_lapangan->getid_jenislapangan()->result(),
				'pagename' => 'Data Jenis Lapangan'
			]
		];
// $this->load->view('adminlte2/datalapangan/data_lapangan', $data);
		$this->load->view('adminlte2/global/template', $data);
	}


	public function insert()
	{
		$this->form_validation->set_rules('nama_lapangan','Nama_lapangan', 'required');
		$this->form_validation->set_rules('jenis_lapangan','Jenis_lapangan', 'required');
		$this->form_validation->set_rules('harga_lapangan','harga_lapangan','required');
		$this->form_validation->set_rules('desc_lapangan','Desc_lapangan','required');
		// $this->form_validation->set_rules('phone','Phone','required');
		// $this->form_validation->set_rules('email','Email','required');


		if($this->form_validation->run() != false){


			$tgl = date("Y-m-d H:i:s");

			// $username = $this->input->post('username');
			// $password = $this->input->post('password');
			// $level = $this->input->post('level');

			$nama_lapangan = $this->input->post('nama_lapangan');
			$jenis_lapangan =  $this->input->post('jenis_lapangan');
			$harga_lapangan = $this->input->post('harga_lapangan');
			$desc_lapangan = $this->input->post('desc_lapangan');
			// $phone = $this->input->post('phone');
			// $id_biodata = md5($username. $tgl);
			$id = md5($nama_lapangan. $tgl);

			// $username = $this->input->post('username');
			// $password = $this->input->post('password');
			// $level = $this->input->post('level');



			$data = array(
				'id_lapangan' => $id,
				'nama_lapangan' => ucwords($nama_lapangan),
				'id_jenis_lapangan' => ucwords($jenis_lapangan),
				'harga_lapangan' => $harga_lapangan,
				// 'phone' => $phone,
				'images_lapangan' => NULL,
				'created_at'=> $tgl,
				'updated_at' => NULL
			);


			// $datauser = array(
			// 	'id_users' => $id,
			// 	'id_biodata' => $id_biodata,
			// 	'username' => $username,
			// 	'password' => md5($password),
			// 	'level' => 'member',
			// 	'created_at'=> $tgl,
			// 	'updated_at' => NULL
		 //
		 // );
		  $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			$this->model_lapangan->input_data($data, 'data_lapangan');
			// $this->model_users->input_data($datauser,'user');

			redirect('admin/datalapangan');

		}else{
			 $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf data gagal ditambahkan !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/datalapangan');
			// $this->load->view('pages/users/register_form');
		}



	}

	// public function get_datalapangan_json()
	// {
	// 	$this->load->library('datatables');
	// 	$this->datatables->select('*');
	// 	$this->datatables->from('data_users');
	// 	return print_r($this->datatables->generate());
	// }
	public function delete()
	{
		$id_lapangan = $this->input->post('id_lapangan');
		if($id_lapangan == ""){
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf Data gagal dihapus!!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/datalapangan');
    }else{
		$where = array('id_lapangan' => $id_lapangan);
		$this->model_lapangan->delete($where, 'data_lapangan');
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapuskan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/datalapangan');
		}
	}

	function update()
	{
		$this->form_validation->set_rules('nama_lapangan','Nama_lapangan', 'required');
		$this->form_validation->set_rules('jenis_lapangan','Jenis_lapangan', 'required');
		$this->form_validation->set_rules('harga_lapangan','harga_lapangan','required');
		$this->form_validation->set_rules('desc_lapangan','Desc_lapangan','required');

		if($this->form_validation->run() != false){


			$tgl = date("Y-m-d H:i:s");


			$id = $this->input->post('id_lapangan');
			$nama_lapangan = $this->input->post('nama_lapangan');
			$jenis_lapangan =  $this->input->post('jenis_lapangan');
			$harga_lapangan = $this->input->post('harga_lapangan');
			$desc_lapangan = $this->input->post('desc_lapangan');
			// $id = md5($nama_lapangan. $tgl);

				$data = array(
				// 'id_lapangan' => $id,
				'nama_lapangan' => ucwords($nama_lapangan),
				'jenis_lapangan' => ucwords($jenis_lapangan),
				'harga_lapangan' => $harga_lapangan,
				'desc_lapangan' => $desc_lapangan,
				// 'phone' => $phone,
				'images_lapangan' => NULL,
				'created_at'=> NULL,
				'updated_at' => $tgl
			);

			$where = array('id_lapangan' => $id);

			$this->model_lapangan->update($where, $data, 'data_lapangan');
			// $this->model_users->input_data($datauser,'user');
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			  // $this->session->set_flashdata('sukses'," Data Berhasil diubah");
			redirect('admin/datalapangan');

		}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf data gagal diubah !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/datalapangan');
			// $this->load->view('pages/users/register_form');
		}
	}




}

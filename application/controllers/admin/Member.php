<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Members_model');
		 	$this->load->library(array('datatables', 'session'));
			$this->load->model('members_model');
			$this->load->library('form_validation');
			if ($this->session->userdata('status') != 'login_user')
			{
				redirect(base_url('auth/admin_login'));
	  	}

	}

	public function index()
	{
		$data = [
			'active_controller' => 'member',
			'active_function' => 'data_member',
			'data' => [
				'getdata' => $this->members_model->ambil_data()->result(),
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

	public function insert()
	{
		$this->form_validation->set_rules('first_name','First_name', 'required');
		$this->form_validation->set_rules('last_name','Last_name', 'required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('alamat','alamat','required');


		if($this->form_validation->run() != false){


			$tgl = date("Y-m-d H:i:s");

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			// $level = $this->input->post('level');

			$first_name = $this->input->post('first_name');
			$lastname =  $this->input->post('last_name');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$phone = $this->input->post('phone');
			$id_member = md5($username. $tgl);
			// $id = md5($id_biodata. $tgl);

			// $username = $this->input->post('username');
			// $password = $this->input->post('password');
			// $level = $this->input->post('level');



			$data = array(
				'id_member' => $id_member,
				'firstname' => ucwords($first_name),
				'lastname' => ucwords($lastname),
				'email' => $email,
				'alamat' => $alamat,
				'no_telp' => $phone,
				'username' => $username,
				'password' => md5($password),
				// 'level' => 'member',
				// 'images_biodata' => $images_biodata,
				'created_at'=> $tgl,
				'updated_at' => NULL
			);
		 //
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

			$this->members_model->input_data($data,'data_member');
			// $this->model_users->input_data($datauser,'user');
		 $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/member');

		}else{
			 $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Maaf Data gagal ditambahkan !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('member', $data);
			// $this->load->view('pages/users/register_form');
		}

	}
	public function delete($id_member){
		$id_member = $this->input->post('id_member');
		if($id_member == ""){
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf Data gagal dihapus!!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/member');
    }else{


		$where = array('id_member' => $id_member);
		$this->members_model->delete($where, 'data_member');
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapuskan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/member');
		}
	}


	public function update()
	{
		$this->form_validation->set_rules('firstname','Firstname', 'required');
		$this->form_validation->set_rules('lastname','Lastname', 'required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('no_telp','No_telp','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('alamat','alamat','required');


		if($this->form_validation->run() != false){

			$tgl = date("Y-m-d H:i:s");

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			// $level = $this->input->post('level');

			$first_name = $this->input->post('firstname');
			$last_name =  $this->input->post('lastname');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$phone = $this->input->post('no_telp');
			$id = $this->input->post('id_member');
			// $id = md5($id_biodata. $tgl);



			$data = array(
				// 'id_member' => $id,
				'username' => $username,
				'password' => md5($password),
				'firstname' => ucwords($first_name),
				'lastname' => ucwords($last_name),
				'email' => $email,
				'alamat' => $alamat,
				'no_telp' => $phone,
				// 'images_biodata' => $images_biodata,
				'created_at'=> NULL,
				'updated_at' => $tgl
			);


			$where = array(
				'id_member' => $id

			);


			$this->members_model->update($where, $data,'data_member');
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/member');

		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Maaf data gagal ditambahkan !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/member');

		}

	}



}

	// function dumping(){
	// 	INSERT INTO `data_users` (`id_users`, `id_groups`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `remember_code`, `created_at`, `update_at`, `last_login`) VALUES ('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL)
	// }

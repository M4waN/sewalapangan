<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Members_model');
		 $this->load->library(array('datatables', 'session'));
		$this->load->model('model_users');
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
				'getdata' => $this->model_users->ambil_data()->result(),
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
			$id_biodata = md5($username. $tgl);
			$id = md5($id_biodata. $tgl);

			// $username = $this->input->post('username');
			// $password = $this->input->post('password');
			// $level = $this->input->post('level');



			$data = array(
				'id_biodata' => $id_biodata,
				'first_name' => ucwords($first_name),
				'last_name' => ucwords($lastname),
				'email' => $email,
				'alamat' => $alamat,
				'phone' => $phone,
				// 'images_biodata' => $images_biodata,
				'created_at'=> $tgl,
				'updated_at' => NULL
			);

			$datauser = array(
				'id_users' => $id,
				'id_biodata' => $id_biodata,
				'username' => $username,
				'password' => md5($password),
				'level' => 'member',
				'created_at'=> $tgl,
				'updated_at' => NULL

		 );

			$this->model_users->input_data($data,'biodata_users');
			$this->model_users->input_data($datauser,'user');
			redirect('admin/member');

		}else{
			$data = [
			// 'data' => [
				'msg' => 'error-msg'
			// ]

			];
			redirect('member', $data);
			// $this->load->view('pages/users/register_form');
		}

	}
	public function delete($id_users){
		$where = array('id_users' => $id_users);
		$this->model_users->delete($where, 'user');
		redirect('admin/member');
	}

	public function edit($id_users){
		$where = array('id_users' => $id_users);
		$data['user'] = $this->model_users->edit($where, 'user')->result();
		$this->load->view('pages/users/login_editform', $data);

	}

	public function update()
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
			$id_biodata = $this->input->post('id');
			// $id = md5($id_biodata. $tgl);



			$data = array(
				'id_biodata' => $id_biodata,
				'first_name' => ucwords($first_name),
				'last_name' => ucwords($lastname),
				'email' => $email,
				'alamat' => $alamat,
				'phone' => $phone,
				// 'images_biodata' => $images_biodata,
				'created_at'=> $tgl,
				'updated_at' => NULL
			);

			$datauser = array(
				// 'id_users' => $id,
				// 'id_biodata' => $id_biodata,
				'username' => $username,
				'password' => md5($password),
				'level' => 'member',
				// 'created_at'=> $tgl,
				'updated_at' => $tgl,

		 );
			$data = array(

				'username' => $username,
				'password' => md5($password),
				'fullname' => $nama,
				'email' => $email,
				'level' => $level,
				'updated_at' => $tgl
			);
			$where = array(
				'id_users' => $id

			);
			$whereuser = array(
				'id_users' => $id

			);

			$this->model_users->update($where, $data,'data_users');

			redirect('users/view');

		}else{
			$this->load->view('pages/users/login_editform');

		}

	}



}

	// function dumping(){
	// 	INSERT INTO `data_users` (`id_users`, `id_groups`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `remember_code`, `created_at`, `update_at`, `last_login`) VALUES ('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL)
	// }

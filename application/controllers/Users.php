<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
			parent::__construct();		
			$this->load->model('model_users');
			$this->load->helper('url');
			// $this->load->helper ('form');
			$this->load->library('form_validation');
		}

	

	public function login_form(){

	if ($this->ion_auth->logged_in())
	{ 
		redirect('auth/index'); 
	}

		$this->load->view('adminlte2/global/head');
		$this->load->view('pages/users/login_form');
		
		$this->load->view('adminlte2/global/javascript');
	}

	public function register_form(){

	
			
		$this->load->view('adminlte2/global/head');
		$this->load->view('pages/users/register_form');
		
		$this->load->view('adminlte2/global/javascript');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('level','Level','required');
		

		if($this->form_validation->run() != false){


			$tgl = date("Y-m-d H:i:s");
			
			$username = $this->input->post('username');
			$password = $this->input->post('nama');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$level = $this->input->post('level');
			$id = md5($username. $tgl);



			$data = array(
				'id_users' => $id,
				'username' => $username,
				'password' => md5($password),
				'fullname' => $nama,
				'email' => $email,
				'level' => $level,
				'created_at'=> $tgl,
				'updated_at' => NULL
			);
			$this->model_users->input_data($data,'data_users');
			redirect('users/view');

		}else{
			$this->load->view('pages/users/login_form');
		}
		
	}
	public function view(){
		$data['user'] = $this->model_users->ambil_data()->result();
		$this->load->view('pages/users/v_users.php',$data);
	}

	public function delete($id_users){
		$where = array('id_users' => $id_users);
		$this->model_users->delete($where, 'data_users');
		redirect('users/view');
	}

	public function edit($id_users){
		$where = array('id_users' => $id_users);
		$data['user'] = $this->model_users->edit($where, 'data_users')->result();
		$this->load->view('pages/users/login_editform', $data);

	}

	public function update()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('level','Level','required');
		

		if($this->form_validation->run() != false){


			$tgl = date("Y-m-d H:i:s");

			$id = $this->input->post('id');
			$username = $this->input->post('username');
			$password = $this->input->post('nama');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$level = $this->input->post('level');
			



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

			$this->model_users->update($where, $data,'data_users');

			redirect('users/view');

		}else{
			$this->load->view('pages/users/login_editform');
			
		}
		
	}

	function get_json(){
		
	}

}

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

	// if ($this->ion_auth->logged_in())
	// {
	// 	redirect('auth/index');
	// }

		// $this->load->view('adminlte2/global/head');
		$this->load->view('pages/users/login_form');

		$this->load->view('adminlte2/global/javascript');
	}

	public function register_form(){



		$this->load->view('indextemplate/01_head');
		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/users/register_form');
		$this->load->view('indextemplate/03_footer');
		$this->load->view('pages/users/login_form');
		$this->load->view('indextemplate/04_foot');

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
				'no_telp' => $phone,
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
			redirect('index.php');

		}else{
			$this->load->view('pages/users/register_form');
		}

	}
	public function view(){
		$data['user'] = $this->model_users->ambil_data()->result();
		$this->load->view('pages/users/v_users.php',$data);
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

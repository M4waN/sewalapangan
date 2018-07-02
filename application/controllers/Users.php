<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Members_model');
			$this->load->model('Model_lapangan');
			$this->load->model('Pemesanan_model');
			$this->load->helper('url');
			$this->load->library(array('form_validation', 'session', 'helptool'));
			$this->load->helper(array('url', 'language'));
			// $this->load->helper ('form');
			// $this->load->library(array('form_validation', 'session'));
		}

	// public function index()
	// {
	// 	// $this
	// }

	function index()
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
			 'id_member' => $id,
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

			// $this->Members_model->input_data($data,'biodata_users');
			$this->Members_model->input_data($data,'data_member');
			$this->session->set_flashdata('success', 'success');
			redirect('register');

		}else{
			$this->load->view('pages/users/register_form');
		}

	}
	public function view(){
		$data['user'] = $this->Members_model->ambil_data()->result();
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

			$this->Members_model->update($where, $data,'data_users');

			redirect('users/view');

		}else{
			$this->load->view('pages/users/login_editform');

		}

	}

	function get_json(){

	}

}

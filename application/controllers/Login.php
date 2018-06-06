<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper('url');
		$this->load->model(array('login_model'));
	}

	function admin_login()
	{
		$this->load->view('login/admin_login');
	}

	function auth_login_member()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->login_model->auth_member("data_member",$where)->num_rows();
			if($cek > 0){

				$data_session = array(
					'nama' => $username,
					'status' => "login_member"
					);

				$this->session->set_userdata($data_session);

				redirect(base_url());
			}else{
				$this->sesison->set_flashdata('error-msg','Login gagal! Username dan password salah !!!');
				redirect(base_url('#modalLogin'));
			}
	}

	function auth_login_user()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->login_model->auth_user("user",$where)->num_rows();
			if($cek > 0){

				$data_session = array(
					'nama' => $username,
					'status' => "login_user"
					);

				$this->session->set_userdata($data_session);

				redirect(base_url('admin'));
			}else{
				$this->session->set_flashdata('error-msg','Login gagal! Username dan password salah !!!');
				redirect(base_url('login/admin_login'));
			}
	}

	function logout(){
$this->session->sess_destroy();
redirect(base_url('login'));
}



}

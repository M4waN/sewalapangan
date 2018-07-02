<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper('url');
		$this->load->model(array('login_model'));
	}

	function login()
	{
		// $this->load->view('indextemplate/01_head');
		$this->load->view('pages/users/login_form');
		$this->load->view('indextemplate/04_foot');
	}

	function admin_login()
	{
		$this->load->view('login/admin_login');
	}

	function auth_login_member()
	{
		// if($this->session->userdata('status') != 'login_user'){
		// 	redirect(base_url('#loginModal'));
		// }
	// 	// $query = $this->db->get('users');
	//
  // if($query->num_rows() > 0){
  //   $row = $query->row();
  //   $data = array(
  //       'user_id' 		=> $row->id,
  //       'user_avatar' 	=> $row->avatar,
  //       'user_name' 	=> $row->username,
  //       'full_name' 	=> $row->fullname,
  //       'logged_in'  	=> TRUE,
  //       );
  //   $this->session->set_userdata($data);
  //   return true;
  // }else{
  //   return false;
  // }
			// $redirect_url = 'member/profile';

			$redirect_url = $this->input->post('redirect_url');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->login_model->auth_member("data_member",$where)->num_rows();
			if($cek > 0){
				$row = $this->login_model->auth_member("data_member", $where)->row();
				$data_session = array(
					'id_member' => $row->id_member,

					'username_member' => $username,
					'nama_member' => ucwords($row->firstname . " " . $row->lastname),
					'email_member' => $row->email,
					'no_telp_member' => $row->no_telp,
					'img_profile_member' => $row->img,
					'status_login' => "login_member",

					);

				$this->session->set_userdata($data_session);


				redirect(base_url('member'.$redirect_url));

				redirect(base_url($redirect_url));


				// header("Location: base_url('calendar')");
			}else{
				$this->session->set_flashdata('error-msg','Login gagal! Username dan password salah !!!');
				redirect(base_url('auth/login'));
			}
	}

	function auth_login_user()
	{
		// if($this->session->userdata('status') != 'login_user'){
		// 	redirect(base_url('auth/admin_login'));
		// }

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
				);

			$cek = $this->login_model->auth_user("data_user",$where)->num_rows();
			if($cek > 0){
				$row = $this->login_model->auth_user("data_user", $where)->row();

				$data_session = array(
					'nama' => ucwords($row->first_name ." " . $row->last_name),
					'level' => ucwords($row->level),

					'status' => "login_user"
					);

				$this->session->set_userdata($data_session);

				redirect(base_url('admin'));
			}else{
				$this->session->set_flashdata('error-msg','Login gagal! Username dan password salah !!!');
				redirect(base_url('auth/admin_login'));
			}
	}

	function logout_admin(){
$this->session->sess_destroy();
redirect(base_url('auth/admin_login'));
}
function logout_member(){
$this->session->sess_destroy();
redirect(base_url(''));
}



}

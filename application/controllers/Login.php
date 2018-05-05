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
		$this->load->library(array('ion_auth', 'form_validation', 'session'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	function index()
	{

		if ($this->input->post()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');
			if ($this->form_validation->run()==TRUE) {
				$remember = (bool) $this->input->post('remember');
				if ($this->ion_auth->login($this->input->post('email'),$this->input->post('password'),$remember)) {
					// redirect('admin','refresh');
					echo "anda admin";
				}else{
					$this->session->flashdata('message',$this->ion_auth->errors());
					redirect('login','refresh');
				}
			}
		}
		if (!$this->ion_auth->logged_in()) {
			$data = array('content' => 'home/formlogin',
				'title'=>'Login Page',
				'description'=>'Login page');
			$this->load->view('login/login',$data);
			echo "belum_logout";

			$this->session->flashdata('message',$this->ion_auth->errors());
		}else{
            if ($this->ion_auth->in_group('admin')) {
                // redirect('admin','refresh');
                echo "anda admin";
            }elseif ($this->ion_auth->in_group('members')) {
            	redirect('admin/members','refresh');
            }else{
				redirect('login','refresh');
			}
        }
	}
	public function logout(){
		$this->ion_auth->logout();
  		// redirect('login', 'refresh');
  		echo "anda berhasil logout";
	}


	// 	//we check if they are logged in, generally this would be done in the constructor, but we want to allow customers to log out still
	// 	//or still be able to either retrieve their password or anything else this controller may be extended to do
	// 	$redirect	= $this->ion_auth->logged_in(false, false);
	// 	//if they are logged in, we send them back to the dashboard by default, if they are not logging in
	// 	if ($redirect)
	// 	{
	// 		redirect('admin/dashboard');
	// 	}


	// 	//buat validasi input form login //validasi username wajib diisi dan bersih dari cross site scripting 
	// 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// 	// $this->form_validation->set_rules('username', 'Username', 'required'); 
	// 	//validasi password wajib diisi 
	// 	$this->form_validation->set_rules('password', 'Password', 'required');
		
		
	// 	$this->load->helper('form');
	// 	$data['redirect']	= $this->session->flashdata('redirect');
	// 	$submitted 			= $this->input->post('submitted');

	// 	// if ($submitted)
	// 	// {
	// 	// 	$username	= $this->input->post('email');
	// 	// 	// $username	= $this->input->post('username');
	// 	// 	$password	= $this->input->post('password');
	// 	// 	$password_encrypt = md5($password);
	// 	// 	$remember   = $this->input->post('remember');
	// 	// 	$redirect	= $this->input->post('redirect');
	// 		// $login		= $this->ion_auth->login_admin($email, $password, $remember);

	// 		// if ($this->form_validation->run()==TRUE) {
	// 		// 	$remember = (bool) $this->input->post('remember');
	// 		// 	if ($this->ion_auth->login($this->input->post('email'),$this->input->post('password'),$remember)) {
	// 		// 		redirect('admin','refresh');
	// 		// 	}else{
	// 		// 		$this->session->flashdata('message',$this->ion_auth->errors());
	// 		// 		redirect('login','refresh');
	// 		// 	}
	// 		// }

	// 		if (!$this->ion_auth->logged_in()) 
	// 		{
	// 			$data         = array('content' => 'home/formlogin',
	// 			'title'       =>'Login Page',
	// 			'description' =>'Login page');
	// 			$this->load->view('login/login',$data);
	// 		}
	// 		else
	// 		{
	// 			if ($this->ion_auth->in_group('admin')) 
	// 				{
	// 					redirect('admin','refresh');
	// 				}
	// 			elseif ($this->ion_auth->in_group('members')) 
	// 				{
	// 					redirect('members','refresh');
	// 				}
	// 			else
	// 				{
	// 					redirect('sds', 'refresh');
	// 				}
	// 		}

	// 		// if ($login)
	// 		// {	
				
	// 		// 	if ($redirect == '')
	// 		// 	{
	// 		// 		$this->session->set_flashdata('message', 'Enter Text');
	// 		// 		$redirect = 'admin/dashboard';
	// 		// 	}
	// 		// 	redirect($redirect);
	// 		// }
	// 		// else
	// 		// {
	// 		// 	//this adds the redirect back to flash data if they provide an incorrect credentials
	// 		// 	$this->session->set_flashdata('redirect', $redirect);
	// 		// 	$this->session->set_flashdata('error', 'Authentication Failed');
	// 		// 	redirect('login');
	// 		// }


	// 	// }
	// 	// $this->load->view('login/login', $data);
		
	// }

	// function logout()
	// {
	// 	$this->ion_auth->logout();
		
	// 	//when someone logs out, automatically redirect them to the login page.
	// 	$this->session->set_flashdata('message', "logged Out successfully");
	// 	redirect('login');
	// }

}
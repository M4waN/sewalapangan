<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Members_model');
			$this->load->library(array('ion_auth', 'form_validation', 'session'));
			$this->load->helper(array('url', 'language'));
		}

	public function index()
	{
		// $this->load->view('indextemplate/wrap');
		$this->load->view('index/head');
		// $this->load->view('index/header');

		$this->load->view('index/about');
		$this->load->view('index/fitur');
		$this->load->view('index/blog');
		$this->load->view('index/contact');
		$this->load->view('index/footer');

		$this->load->view('index/foot');
		$this->load->view('pages/users/login_form');

	}

	function jadwal()
	{
		$this->load->view('indextemplate/01_head');
		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/jadwal/jadwal');
		$this->load->view('indextemplate/03_footer');
		$this->load->view('pages/users/login_form');
		$this->load->view('indextemplate/04_foot');
		$this->load->view('pages/jadwal/fcalendarscript');

	}
}

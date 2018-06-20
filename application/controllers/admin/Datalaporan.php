<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalaporan extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('Laporan_model');
   $this->load->library(array('datatables', 'session'));
   if ($this->session->userdata('status') != 'login_user')
   {
     redirect(base_url('auth/admin_login'));
   }

 }

 public function index()
 {
   $data = [
     'active_controller' => 'datalaporan',
     'active_function' => 'data_laporan',
     'data' => [
       'getdata' => $this->Laporan_model->getData(),
       'pagename' => 'Laporan'
     ]

   ];
   $this->load->view('adminlte2/global/template', $data);
 }

 function JSON()
 {
   header('Content-Type: application/json');
   return $this->Pemesanan_model->getData();
 }
}

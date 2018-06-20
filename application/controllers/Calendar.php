<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('Model_jadwal');
			$this->load->library(array('form_validation', 'session'));
			$this->load->helper(array('url', 'language'));
		}


	function index()
	{
		$this->load->view('indextemplate/01_head');
		// $this->load->view('indextemplate/02_header');
		$this->load->view('indextemplate/navbar');
		$this->load->view('pages/jadwal/jadwal');
		$this->load->view('indextemplate/03_footer');
		$this->load->view('pages/users/login_form');
		$this->load->view('indextemplate/04_foot');
		$this->load->view('pages/jadwal/fcalendarscript');
    // $this->load->view('pages/jadwal/home');

	}

  Public function getEvents()
	{
    $data = array();
		$result=$this->Model_jadwal->getEvents();
    foreach ($result as $u) {
      $data[] = array(
        'title' => 'test',
        'description' => 'tests',
        // 'color' => '#F2F2F2',
        'start' => $u->waktu_mulai ,
        'end' => $u->waktu_selesai
       );
    }
		echo json_encode($data);
	}

  /*Add new event */
Public function addEvent()
{
  $result=$this->Model_jadwal->addEvent();
  echo $result;
}
/*Update Event */
Public function updateEvent()
{
  $result=$this->Model_jadwal->updateEvent();
  echo $result;
}
/*Delete Event*/
Public function deleteEvent()
{
  $result=$this->Model_jadwal->deleteEvent();
  echo $result;
}
Public function dragUpdateEvent()
{

  $result=$this->Model_jadwal->dragUpdateEvent();
  echo $result;
}



}

<?php

class Model_jadwal extends CI_Model{
	public function __construct(){
		parent::__construct();

	}


	// function getEvents()
  // {
  //   $sql = "SELECT * FROM events WHERE events.date BETWEEN ? AND ? ORDER BY events.date ASC";
	// return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
  //
  // }
  function getEvents()
  {
  //   $sql = "SELECT * FROM data_booking WHERE data_booking.waktu_mulai BETWEEN ? AND ? ORDER BY data_booking.waktu_mulai ASC";
	// return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
	$this->db->select('data_booking. *, data_member.*, data_lapangan.* , jenis_lapangan.*');
	$this->db->from('data_booking');
	$this->db->join('data_lapangan', 'data_lapangan.id_lapangan = data_booking.id_lapangan');
	$this->db->join('jenis_lapangan', 'jenis_lapangan.id_jenis_lapangan = data_lapangan.id_jenis_lapangan');
	$this->db->join('data_member', 'data_member.id_member = data_booking.id_member');
	$this->db->where('status', 'lunas');
	$this->db->or_where('status', 'barudp');
	$data = $this->db->get()->result();
	return $data;

  }

	function getResources()
	{

	}

  /*Create new events */

  	Public function addEvent()
  	{

  	$sql = "INSERT INTO events (title,events.date, description, color) VALUES (?,?,?,?)";
  	$this->db->query($sql, array($_POST['title'], $_POST['date'], $_POST['description'], $_POST['color']));
  		return ($this->db->affected_rows()!=1)?false:true;
  	}

  	/*Update  event */

  	Public function updateEvent()
  	{

  	$sql = "UPDATE events SET title = ?, events.date = ?, description = ?, color = ? WHERE id = ?";
  	$this->db->query($sql, array($_POST['title'], $_POST['date'], $_POST['description'], $_POST['color'], $_POST['id']));
  		return ($this->db->affected_rows()!=1)?false:true;
  	}


  	/*Delete event */

  	Public function deleteEvent()
  	{

  	$sql = "DELETE FROM events WHERE id = ?";
  	$this->db->query($sql, array($_GET['id']));
  		return ($this->db->affected_rows()!=1)?false:true;
  	}

  	/*Update  event */

  	Public function dragUpdateEvent()
  	{
  			$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

  			$sql = "UPDATE events SET  events.date = ? WHERE id = ?";
  			$this->db->query($sql, array($date, $_POST['id']));
  		return ($this->db->affected_rows()!=1)?false:true;


  	}

}


<!-- <?php $date['user'] ?> -->
<!-- <?php foreach($user as $u){

} ?> -->
<?php if(isset($data)){
	$this->load->view('adminlte2/global/head' , $data); 
	}
	else{
		$this->load->view('adminlte2/global/head'); 
	}

	?>
<?php $this->load->view('adminlte2/global/header'); ?>
<?php $this->load->view('adminlte2/global/headerbar'); ?>
<?php $this->load->view('adminlte2/global/sidebar'); ?>
<!-- bagian dinamis -->
<?php if(isset($data)){
	$this->load->view('adminlte2/'. $active_controller.'/'.$active_function ,  $data);
}  
else{
	$this->load->view('adminlte2/'. $active_controller.'/'.$active_function);
}
?>
<!-- bagian dinamis berakhir -->
<?php $this->load->view('adminlte2/global/footer'); ?>
<?php $this->load->view('adminlte2/global/controlbar'); ?>
<?php $this->load->view('adminlte2/global/javascript'); ?>
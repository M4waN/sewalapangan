<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/fastclick/lib/fastclick.js"></script>

<!-- Sparkline -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/adminlte2/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/chart.js/Chart.js"></script>

<!-- batas -->




<!-- page script -->


<script src="<?php echo base_url('assets/adminlte2') ?>/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url('assets/adminlte2') ?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>dist/js/demo.js"></script>
<!-- page script -->
<script>



	$(document).ready(function() {
	
    $('[data-mask]').inputmask()	

    $('#example1').DataTable( {
    	"searching"   : false,
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo site_url('admin/member/get_datamember_json');?>",
            "type": "POST",
            // "dataSrc": "columns"
        },
        "columns": [
				{ "data": "id_users" },
				{ "data": "username" },
				{ "data": "password" },
				{ "data": "fullname" },
				{ "data": "email" },
				{ "data": "level" }
        ]
    } );


} );

	 

	  $('#example2').DataTable()
	</script>







</body>
</html>

<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $pagename; ?>
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password(s)</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Level</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $no=1; foreach($getdata as $u){ ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $u->nama_lapangan ?></td>
      <td><?php echo $u->jenis_lapangan ?></td>
      <td><?php echo $u->harga_lapangan ?></td>
      <td><?php echo $u->desc_lapangan ?></td>
      <td><?php echo anchor('users/delete/'. $u->id_lapangan, 'Delete'); ?>  | <?php echo anchor('users/edit/'. $u->id_lapangan , 'Update' ); ?></td> 

      <td></td>
    </tr>
    <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>



  $(document).ready(function() {
  
    // $('[data-mask]').inputmask()  

//     $('#example1').DataTable( {
//       "searching"   : false,
//         "processing": true,
//         "serverSide": true,
//         "ajax": {
//             "url": "<?php echo site_url('admin/member/get_datamember_json');?>",
//             "type": "POST",
//             // "dataSrc": "columns"
//         },
//         "columns": [
//         { "data": "id_users" },
//         { "data": "username" },
//         { "data": "password" },
//         { "data": "fullname" },
//         { "data": "email" },
//         { "data": "level" }
//         ]
//     } );
 $('#mytable').DataTable();
    

} );

   

   
  </script>
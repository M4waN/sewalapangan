<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">


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
                <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>

                  <th>NamaLapangan</th>
                  <th>JenisLapangan</th>
                  <th>TarifperJam</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                  <th></th>
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
      <td><?php echo anchor('admin/datalapangan/delete/'. $u->id_lapangan, 'Delete'); ?>  | <?php echo anchor('datalapangan/edit/'. $u->id_lapangan , 'Update' ); ?></td>

      <td></td>
    </tr>
    <?php } ?>

                </tbody>
                <tfoot>

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
  <!-- Modal Add Produk-->
    <form id="add-row-form" action="<?php echo base_url().'admin/datalapangan/insert'?>" method="post">
       <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
  <!-- <div class="alert alert-danger">

     field is wrong
   </div> -->


                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Add New</h4>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" name="nama_lapangan" class="form-control" placeholder="Nama Lapangan" required>
                     </div>

                     <div class="form-group">
                         <input type="text" name="jenis_lapangan" class="form-control" placeholder="Jenis Lapangan" required>
                     </div>
                     <div class="form-group">
                         <input type="text" name="harga_lapangan" class="form-control" placeholder="TarifperJam" required>
                     </div>
                     <div class="form-group">
                         <input type="text" name="desc_lapangan" class="form-control" placeholder="Deskripsi" required>
                     </div>
                     <div class="form-group">
                         <input type="text" name="images_lapangan" class="form-control" placeholder="Gambar" required>
                     </div>



                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" id="add-row" class="btn btn-success">Save</button>
                 </div>
              </div>
          </div>
       </div>
   </form>


<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<!-- <script src="Https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>

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
 $('#mytable').DataTable(
   // {
   //
   //   dom: 'Bfrtip',
   //   buttons: [
   //     'copy', 'csv', 'excel', 'pdf', 'print'
   //   ]
   // }
 );


} );




  </script>

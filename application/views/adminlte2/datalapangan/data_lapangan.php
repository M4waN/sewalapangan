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

          <?php
            $data=$this->session->flashdata('notif');
            if($data!=""){?>
            <?=$data;?>
            <?php } ?>

            <?php
            $data2=$this->session->flashdata('error');
            if($data2!=""){ ?>
            <?=$data;?>
            <?php } ?>

          <div class="box">
            <div class="box-header">

              <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">


              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>

                  <th>No.</th>
                  <th>NamaLapangan</th>
                  <th>JenisLapangan</th>
                  <th>TarifperJam</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                  <!-- <th></th> -->
                </tr>
                </thead>
                <tbody>

    <?php $no=1; foreach($getdata as $u){ ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $u->nama_lapangan ?></td>
      <td><?php echo $u->jenis_lapangan ?></td>
      <td align="right  "><?php echo $this->helptool->rupiah($u->harga_lapangan) ?></td>
      <td><?php echo $u->desc_lapangan ?></td>
      <td>
        <a    href="javascript:;"
            data-id_lapangan="<?php echo $u->id_lapangan ?>"

            data-toggle="modal" data-target="#hapus-data">
            <button  data-toggle="modal" data-target="#delete-data" class="btn btn-info btn-danger">Hapus</button>
              </a>
<a    href="javascript:;"
      data-id_lapangan="<?php echo $u->id_lapangan ?>"
      data-nama_lapangan="<?php echo $u->nama_lapangan ?>"
      data-jenis_lapangan="<?php echo $u->jenis_lapangan ?>"
      data-harga_lapangan="<?php echo $u->harga_lapangan ?>"
      data-desc_lapangan="<?php echo $u->desc_lapangan ?>"

      data-toggle="modal" data-target="#edit-data">
      <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button>
        </a>
    </td>



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

   <!-- Modal Ubah -->
   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                   <h4 class="modal-title">Ubah Data</h4>
               </div>
               <form class="form-horizontal" action="<?php echo base_url('admin/datalapangan/update')?>" method="post" enctype="multipart/form-data" role="form">
   	            <div class="modal-body">
   	                    <div class="form-group">
   	                        <label class="col-lg-2 col-sm-2 control-label">Nama Lapangan</label>
   	                        <div class="col-lg-10">
   	                        	<input type="hidden" id="id_lapangan" name="id_lapangan">
   	                            <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" placeholder="Tuliskan Nama">
   	                        </div>
   	                    </div>
                        <div class="form-group">
                             <label class="col-lg-2 col-sm-2 control-label">Jenis Lapangan</label>
                             <div class="col-lg-10">
                                 <input class="form-control" id="jenis_lapangan" name="jenis_lapangan" placeholder="Tuliskan Deskripsi">
                             </div>
                         </div>
   	                    <div class="form-group">
   	                        <label class="col-lg-2 col-sm-2 control-label">Tarif perJam</label>
   	                        <div class="col-lg-10">
   	                            <input type="text" class="form-control" id="harga_lapangan" name="harga_lapangan" placeholder="Tuliskan tarif peJam">
   	                        </div>
   	                    </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-lg-10">
                              <textarea class="form-control" id="desc_lapangan" name="desc_lapangan" placeholder="Tuliskan Alamat"></textarea>
                            </div>
                        </div>

                         <!-- <div class="form-group">
                             <label class="col-lg-2 col-sm-2 control-label">Tarif perJam</label>
                             <div class="col-lg-10">
                                 <input type="text" class="form-control" id="harga_lapangan" name="harga_lapangan" placeholder="Tuliskan tarif peJam">
                             </div>
                         </div> -->
   	                </div>
   	                <div class="modal-footer">
   	                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
   	                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
   	                </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- END Modal Ubah -->

   <!-- Modal Hapus Produk-->
  <form class="form-horizontal" action="<?php echo base_url('admin/datalapangan/delete')?>" method="post" enctype="multipart/form-data" role="form">
       <div class="modal fade" id="hapus-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
                 </div>
                 <div class="modal-body">
                        	<input type="hidden" id="id_lapangan" name="id_lapangan">
                         <strong>Anda yakin mau menghapus record ini?</strong>
                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                 </div>
              </div>
          </div>
       </div>
   </form>

   <!-- /modal hapus produk -->


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
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_lapangan').attr("value",div.data('id_lapangan'));
            modal.find('#nama_lapangan').attr("value",div.data('nama_lapangan'));
            modal.find('#desc_lapangan').html(div.data('desc_lapangan'));
            modal.find('#jenis_lapangan').attr("value",div.data('jenis_lapangan'));
            modal.find('#harga_lapangan').attr("value",div.data('harga_lapangan'));
            // modal.find('#harga_lapangan').attr("value",div.data('harga_lapangan'));
        });

        $('#hapus-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_lapangan').attr("value",div.data('id_lapangan'));
        });
    });
</script>
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


  

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
            <div class="box-body" style="overflow-x:auto;">
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Nama Penyewa</th>
                  <th>Email</th>
                  <th>Lapangan</th>
                  <th>Jenis Lapangan</th>
                  <th>Durasi Sewa</th>
                  <th>Waktu Sewa Mulai</th>
                  <th>Waktu Sewa Berakhir</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $no=1; foreach($getdata as $u){ ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $u->username ?></td>
      <td><?php echo $u->firstname . $u->lastname; ?></td>
      <td><?php echo $u->email; ?></td>
      <td><?php echo $u->nama_lapangan ?></td>
      <td><?php echo $u->jenis_lapangan ?></td>
      <td><?php echo $u->duration_time; ?></td>
      <td><?php echo $u->waktu_mulai; ?></td>
      <td><?php echo $u->waktu_selesai; ?></td>
      <td><?php echo $u->status; ?></td>
      <td>  <a    href="javascript:;"
            data-id_lapangan="<?php echo $u->id_booking ?>"

            data-toggle="modal" data-target="#hapus-data">
            <button  data-toggle="modal" data-target="#delete-data" class="btn btn-info btn-danger">Hapus</button>
              </a> |
              <a    href="javascript:;"
                    data-id_lapangan="<?php echo $u->id_booking ?>"
                    data-nama_lapangan="<?php echo $u->nama_lapangan ?>"
                    data-nama_lapangan="<?php echo $u->nama_lapangan ?>"
                    data-jenis_lapangan="<?php echo $u->jenis_lapangan ?>"
                    data-harga_lapangan="<?php echo $u->harga_lapangan ?>"
                    data-desc_lapangan="<?php echo $u->desc_lapangan ?>"

                    data-toggle="modal" data-target="#edit-data">
                    <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button>
                      </a>
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

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_booking').attr("value",div.data('id_booking'));
            modal.find('#nama_lapangan').attr("value",div.data('nama_lapangan'));
            modal.find('#nama_lapangan').attr("value",div.data('nama_lapangan'));
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

<script type="text/javascript">
            $(document).ready(function() {
                // $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                // {
                //     return {
                //         "iStart": oSettings._iDisplayStart,
                //         "iEnd": oSettings.fnDisplayEnd(),
                //         "iLength": oSettings._iDisplayLength,
                //         "iTotal": oSettings.fnRecordsTotal(),
                //         "iFilteredTotal": oSettings.fnRecordsDisplay(),
                //         "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                //         "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                //     };
                // };

                var t = $("#mytable").dataTable({
                    // initComplete: function() {
                    //     var api = this.api();
                    //     $('#mytable_filter input')
                    //             .off('.DT')
                    //             .on('keyup.DT', function(e) {
                    //                 if (e.keyCode == 13) {
                    //                     api.search(this.value).draw();
                    //         }
                    //     });
                    // },
                    // oLanguage: {
                    //     sProcessing: "loading..."
                    // },
                    // processing: true,
                    // serverSide: true,
                    // ajax: {"url": "datapemesanan/JSON", "type": "POST"},
                    // columns: [
                    //     {
                    //         "data": "created_at",
                    //         "orderable": false
                    //     },
                    //     {"data": "username"},
                    //     {"data": "name"},
                    //     {"data": "nama_lapangan"},
                    //     {"data": "duration_time"},
                    //     {"data": "jam_mulai"},
                    //     {"data": "jam_selesai"},
                    //     {"data": "status"},
                    //     {"data": "view"}
                    // ],
                    // order: [[1, 'asc']],
                    // rowCallback: function(row, data, iDisplayIndex) {
                    //     var info = this.fnPagingInfo();
                    //     var page = info.iPage;
                    //     var length = info.iLength;
                    //     var index = page * length + (iDisplayIndex + 1);
                    //     $('td:eq(0)', row).html(index);
                    // }
                });
            });
        </script>

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
          <?php
            $data=$this->session->flashdata('notif');
            if($data!=""){?>
            <?=$data;?>
            <?php } ?>

            <?php
            $data2=$this->session->flashdata('error');
            if($data2!=""){ ?>
            <?=$data2;?>
            <?php } ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>No. Telp</th>
                  <th>Alamat</th>
                  <th>Username</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $no=1; foreach($getdata as $u){ ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $u->firstname." ". $u->lastname; ?> </td>
      <td><?php echo $u->username; ?> </td>
      <td><?php echo $u->email ?></td>
      <td><?php echo $u->no_telp ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->username ?></td>
      <td>  <a    href="javascript:;"
            data-id_member="<?php echo $u->id_member ?>"

            data-toggle="modal" data-target="#hapus-data">
            <button  data-toggle="modal" data-target="#delete-data" class="btn btn-info btn-danger">Hapus</button>
              </a>  |
              <a    href="javascript:;"
                    data-id_member="<?php echo $u->id_member ?>"
                    data-username="<?php echo $u->username ?>"
                    data-password="<?php echo $u->password ?>"
                    data-firstname="<?php echo $u->firstname ?>"
                    data-lastname="<?php echo $u->lastname ?>"
                    data-alamat="<?php echo $u->alamat ?>"
                    data-email="<?php echo $u->email ?>"
                    data-no_telp="<?php echo $u->no_telp ?>"


                    data-toggle="modal" data-target="#edit-data">
                    <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button>
                      </a>
      </td>

      <!-- <td>Act</td> -->
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
	  <form id="add-row-form" action="<?php echo base_url().'admin/member/insert'?>" method="post">
	     <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	           <div class="modal-content">
	               <div class="modal-header">



	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                   <h4 class="modal-title" id="myModalLabel">Add New</h4>
	               </div>
	               <div class="modal-body">
	                   <div class=" col-md-6 form-group">
	                       <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
	                   </div>

                     <div class="col-md-6 form-group">
	                       <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
	                   </div>
										 <div class="form-group">
	                       <input type="email" name="email" class="form-control" placeholder="Email" required>
	                   </div>
                     <div class="form-group">
	                       <input type="text" name="username" class="form-control" placeholder="Username" required>
	                   </div>
                     <div class="form-group">
	                       <input type="password" name="password" class="form-control" placeholder="Password" required>
	                   </div>
                     <div class="form-group">
	                       <input type="text" name="phone" class="form-control" placeholder="Phone" required>
	                   </div>
                     <div class="form-group">
	                       <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
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
               <form class="form-horizontal" action="<?php echo base_url('admin/member/update')?>" method="post" enctype="multipart/form-data" role="form">
   	            <div class="modal-body">
   	                    <div class="form-group">
   	                        <label class="col-lg-2 col-sm-2 control-label">Username</label>
   	                        <div class="col-lg-10">
   	                        	<input type="hidden" id="id_member" name="id_member">
   	                            <input type="text" class="form-control" id="username" name="username" placeholder="Tuliskan username anda">
   	                        </div>
   	                    </div>
                        <div class="form-group">
   	                        <label class="col-lg-2 col-sm-2 control-label">Password</label>
   	                        <div class="col-lg-10">
   	                            <input type="password" class="form-control" id="password" name="password" placeholder="Tuliskan password anda">
   	                        </div>
   	                    </div>
   	                    <div class="form-group">
   	                        <label class="col-lg-2 col-sm-2 control-label">Firstname</label>
   	                        <div class="col-lg-10">
   	                        	<textarea class="form-control" id="firstname" name="firstname" placeholder="Tuliskan nama awal anda"></textarea>
   	                        </div>
   	                    </div>
   	                    <div class="form-group">
   	                        <label class="col-lg-2 col-sm-2 control-label">Last Name</label>
   	                        <div class="col-lg-10">
   	                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Tuliskan nama terakhir anda">
   	                        </div>
   	                    </div>
                        <div class="form-group">
                             <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                             <div class="col-lg-10">
                                 <input class="form-control" id="alamat" name="alamat" placeholder="Tuliskan alamat anda">
                             </div>
                         </div>
                         <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Email</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="email" name="email" placeholder="Tuliskan Deskripsi">
                              </div>
                          </div>
                          <div class="form-group">
                               <label class="col-lg-2 col-sm-2 control-label">No. Telp</label>
                               <div class="col-lg-10">
                                   <input class="form-control" id="no_telp" name="no_telp" placeholder="Tuliskan Deskripsi">
                               </div>
                           </div>
                           <!-- <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="alamat" name="alamat" placeholder="Tuliskan Deskripsi">
                                </div>
                            </div> -->


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
 	  <form id="add-row-form" action="<?php echo base_url().'admin/member/delete'?>" method="post">
 	     <div class="modal fade" id="hapus-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="hidden" id="id_member" name="id_member" class="form-control" placeholder="id member" required>
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
            modal.find('#id_member').attr("value",div.data('id_member'));
            modal.find('#username').attr("value",div.data('username'));
            modal.find('#firstname').html(div.data('firstname'));
            modal.find('#lastname').attr("value",div.data('lastname'));
            modal.find('#alamat').attr("value",div.data('alamat'));
            modal.find('#email').attr("value",div.data('email'));
            modal.find('#no_telp').attr("value",div.data('no_telp'));
            // modal.find('#harga_lapangan').attr("value",div.data('harga_lapangan'));
        });

        $('#hapus-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_member').attr("value",div.data('id_member'));
        });
    });
</script>

<script>
$('#mytable').DataTable();

</script>

<!-- <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "<?php echo base_url() ?>admin/member/get_datamember_json", "type": "POST", },
                    columns: [
                        {
                            "data": "created_at",
                            "orderable": false
                        },
                        {"data": "first_name"} ,
                        {"data": "email"},
                        {"data": "first_name"}


                    ],
                    order: [[1, 'asc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script> -->

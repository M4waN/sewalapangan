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
                  <th>Level</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $no=1; foreach($getdata as $u){ ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $u->first_name." ". $u->last_name; ?> </td>
      <td><?php echo $u->email ?></td>
      <td><?php echo $u->phone ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->username ?></td>
      <td><?php echo $u->level ?></td>
      <td><?php echo anchor('admin/member/delete/'. $u->id_users, 'Delete'); ?>  | <?php echo anchor('admin/member/update/'. $u->id_users , 'Update' ); ?></td>

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
	  <form id="add-row-form" action="<?php echo base_url().'admin/member/insert'?>" method="post">
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

	 <!-- Modal Update Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/crud/update'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Update Produk</h4>
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
 	                  	<button type="submit" id="add-row" class="btn btn-success">Update</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>

	 <!-- Modal Hapus Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/crud/delete'?>" method="post">
 	     <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="hidden" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
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

<!-- <script type="text/javascript"> -->
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
        </script>

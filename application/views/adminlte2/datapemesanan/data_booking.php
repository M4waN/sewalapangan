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
                  <th>No.</th>
                  <th>Username</th>
                  <th>Nama Penyewa</th>
                  <th>Lapangan</th>
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
      <td><?php echo $u->username; ?></td>
      <td><?php echo $u->name; ?></td>
      <td><?php echo $u->nama_lapangan ?></td>
      <td><?php echo $u->duration_time; ?></td>
      <td><?php echo $u->jam_mulai; ?></td>
      <td><?php echo $u->jam_selesai; ?></td>
      <td><?php echo $u->status; ?></td>
      <td><?php echo anchor('users/delete/'. $u->id_users, 'Delete'); ?>  | <?php echo anchor('users/edit/'. $u->id_users , 'Update' ); ?></td>

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

<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

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
                    ajax: {"url": "datapemesanan/JSON", "type": "POST"},
                    columns: [
                        {
                            "data": "created_at",
                            "orderable": false
                        },
                        {"data": "username"},
                        {"data": "name"},
                        {"data": "nama_lapangan"},
                        {"data": "duration_time"},
                        {"data": "jam_mulai"},
                        {"data": "jam_selesai"},
                        {"data": "status"},
                        {"data": "view"}
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

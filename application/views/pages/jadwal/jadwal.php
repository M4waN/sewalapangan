  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/adminlte2/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte2/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- fullCalendar -->

  <!-- Theme style -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/fullcalendar/'); ?>css/bootstrap-colorpicker.min.css" rel="stylesheet" />

        <link href="<?php echo base_url('assets/fullcalendar/'); ?>css/bootstrap-timepicker.min.css" rel="stylesheet" />


        <link href='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.min.css' rel='stylesheet' />
        <link href='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link href='<?php echo base_url('assets/fullcalendar'); ?>/css/scheduler.min.css' rel='stylesheet' />
        <script src='<?php echo base_url('assets/fullcalendar'); ?>/lib/moment.min.js'></script>

        <script src='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.min.js'></script>
        <script src='<?php echo base_url('assets/fullcalendar'); ?>/js/scheduler.min.js'></script>



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!-- <script src="<?php echo base_url('assets/') ?>fullcalendar/lib/fcalendarwscheduler.js"></script> -->

<style media="screen">
#calendar {
  max-width: 900px;
  margin: 50px auto;

                width: 60vw;
                /* margin: 0 auto; */
								border: 5px solid rgba(0,0,0,.5);
								border-radius: 10px;

            }

</style>
<br>
<!-- Container -->

<div class="container">
          <div class="row clearfix">
              <div class="col-md-12 column">
                      <div id='calendar'></div>
              </div>
          </div>
      </div>

      <link rel="stylesheet" href="<?php echo base_url('assets/fullcalendar/'); ?>lib/fullcalendar.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/fullcalendar/'); ?>lib/fullcalendar.print.min.css" media="print">


              <link href='<?php echo base_url('assets/fullcalendar/'); ?>css/scheduler.min.css' rel='stylesheet' />
              <!-- <link href='<?php echo base_url('assets/fullcalendar/'); ?>css/scheduler.css' rel='stylesheet' /> -->
            <script src='<?php echo base_url('assets/fullcalendar/'); ?>js/scheduler.min.js'></script>
            <!-- <script src='<?php echo base_url('assets/fullcalendar/'); ?>js/scheduler.js'></script> -->

<!-- <div class="container">

          <div class="box box-primary" style="background-color: #FFF; ">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <!-- <div id="calendar"></div>
            </div> -->
            <!-- /.box-body -->
          <!-- </div> -->
          <!-- /. box -->
<!-- <br>
</div> -->

<!-- <script>
function hitung() {
    var durasi = $(".durasi").val();
    var time = $(".time").val();

    c = durasi + <?php echo strtotime(time) ?> //a kali b
    $(".c").val(c);
}
</script> -->

<!-- ModalForm -->
<div id="crud-jadwal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="time">Tanggal Sewa</label>
                                <div class="col-md-4 input-append bootstrap-timepicker">
                                    <input id="date" name="date" type="text" class="form-control input-md" disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="time">Jam Mulai</label>
                                <div class="col-md-4 input-append bootstrap-timepicker">
                                    <input id="time" name="time" type="text" class="form-control input-md" disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="color">Color</label>
                                <div class="col-md-4">
                                    <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                    <span class="help-block">Click to pick a color</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
<!-- /ModalForm -->

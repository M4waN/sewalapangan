<!-- <!DOCTYPE html>
<html>
<head> -->
<meta charset='utf-8' />
<link href='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='<?php echo base_url('assets/fullcalendar'); ?>/css/scheduler.min.css' rel='stylesheet' />

<link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet" />





<style>

  body {
    margin: 0;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    /* max-width: 90%; */
    margin: 50px auto;
    max-width: 80vw;

    /* border: 5px solid rgba(0,0,0,.5);
    border-radius: 10px; */
  }


</style>
<!-- </head> -->
<!-- <body> -->

  <div id='calendar'></div>





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
                          <form class="form-horizontal" action="<?php echo base_url('member/add_pesanan')?>" method="POST" >
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="nama_lapangan">Nama Lapangan</label>
                                  <div class="col-md-6">
                                      <input type="hidden" id="id_lapangan" name="id_lapangan" required>

                                      <input id="nama_lapangan" name="nama_lapangan" type="text" class="form-control input-md" readonly/>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="description">Tarif perJam</label>
                                  <div class="col-md-4">
                                      <input class="form-control" id="tarif" name="tarif" readonly />
                                      <input class="form-control tarif_nonrp" onkeyup="hitung();" id="tarif_nonrp" name="tarif_nonrp" type="hidden" />
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="time">Tanggal Sewa</label>
                                  <div class="col-md-4 input-append bootstrap-timepicker">
                                      <input id="date" name="tanggal_sewa" type="text" class="form-control input-md" readonly />
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="times">Jam Mulai</label>
                                  <div class="col-md-4 input-append bootstrap-timepicker">
                                    <input id="times" name="times" type="text" class="form-control input-md" readonly />
                                    <input id="waktu_mulai" name="waktu_mulai" class="form-control input-md"  type="hidden" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="duration_time">Durasi Main</label>
                                  <div class="col-md-4">
                                      <select class="form-control duration_time"  name="duration_time" onchange="hitung();">
                                        <option value="0">Pilih Durasi Main</option>
                                        <?php for($no=1;$no<=10;$no++): ?>
                                        <option value="<?php echo $no; ?>" class="duration_time" name="duration_time" ><?php echo $no; ?> Jam</option>
                                      <?php endfor; ?>

                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="description">Total Tarif Sewa</label>
                                  <div class="col-md-4">
                                    <!-- <input class="form-control total_tarif money" data-ccy='IDR' name="total_tarif" readonly /> -->


                                    <input class="form-control total_tarif" name="total_tarif" readonly/>
                                    <input class="form-control total_tarif_nonrp" name="total_tarif_nonrp" type="hidden" required/>


                                  </div>
                              </div>


                              <!-- <div class="form-group">
                                  <label class="col-md-4 control-label" for="color">Color</label>
                                  <div class="col-md-4">
                                      <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                      <span class="help-block">Click to pick a color</span>
                                  </div>
                              </div> -->
                              <div class="modal-footer">
                                  <input type="submit" class="btn btn-success" value="Pesan"/>
                                  <!-- <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button> -->
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              </div>
                            </form>
                      </div>


                  </div>
              </div>
          </div>



          <script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/currencyFormatter.min.js"></script>




          <script>
          OSREC.CurrencyFormatter.formatEach('.money');

          function hitung() {
              var tarif_nonrp = $(".tarif_nonrp").val();
              var duration_time = $(".duration_time").val();
              total_tarif_nonrp = tarif_nonrp * duration_time; //a kali b

              $(".total_tarif").val(OSREC.CurrencyFormatter.format(total_tarif_nonrp, { currency: 'IDR', valueOnError: 'Please enter a valid number!' }));
              $(".total_tarif_nonrp").val(total_tarif_nonrp);
          }

          </script>

  <!-- /ModalForm -->
<!-- </body>
</html> -->

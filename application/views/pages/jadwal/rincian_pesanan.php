
<?php $id_transaksi = $this->session->userdata('id_transaksi');
 if($id_transaksi == '') {?>
<div class="col-md-7" style="padding-top: 60px;">

  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-bank"></i> Pembayaran</div>
    <div class="panel-body textcenter"  style="min-height: 100px; ">
      Tidak ada transaksi pembayaran saat ini

    </div>
  </div>

</div>

<?php  }else{ ?>



  <div class="col-md-7" style="padding-top: 60px;">
    <?php $msg = $this->session->flashdata('success');
    if($msg != '' )  { ?>
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php }
  if($this->session->flashdata('failed_msg') != '' )  { ?>
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<?php echo $this->session->flashdata('failed_msg'); ?>
      </div>
    <?php } ?>

    <div class="alert alert-warning" role="alert">
      <p class="textcenter">Selesaikan pembayaran dalam <b>02:59:40</b> </p>
    </div>
    <div class="panel panel-default">

      <div class="panel-heading"><i class="fa fa-bank"></i> Rincian Pembayaran </div>

      <div class="alert alert-default">
        No. Pesanan : <?php echo $id_transaksi ?>
      </div>


      <!-- <div class="list-group-item textcenter">Rincian Pembayaran</div> -->
      <div class="panel-body">
        <div class="row">

          <div class="card">
            <p><b>Pembayaran ATM</b></p>

            <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading bank-collapse bank-collapse">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <img class="img-bank-mandiri" src="<?php echo base_url('assets/index/');?>img/bank-logo/mandiri_logo.png" alt="">Transfer ke Rekening BANK MANDIRI</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">

      <div class=" id-bank">
        Kode Bank <br/>
        <b>008</b>
      </div>
      <div class=" id-bank">
        No. Rekening <br/>
        <b>8426 0002 3553 2242</b>
      </div>
      <div class=" id-bank">
        Nama Pemilik Rekening <br/>
        <b>PT. Pakuan Sport</b>
      </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading bank-collapse">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <img class="img-bank" src="<?php echo base_url('assets/index/');?>img/bank-logo/BNI_logo.png" alt="">Transfer ke Rekening BANK BNI</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <div class=" id-bank">
          Kode Bank <br/>
          <b>008</b>
        </div>
        <div class=" id-bank">
          No. Rekening <br/>
          <b>8426 0002 3553 2242</b>
        </div>
        <div class=" id-bank">
          Nama Pemilik Rekening <br/>
          <b>PT. Pakuan Sport</b>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading bank-collapse">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          <img class="img-bank" src="<?php echo base_url('assets/index/');?>img/bank-logo/BCA_logo.png" alt="">Transfer ke Rekening BANK BCA
        </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <div class=" id-bank">
          Kode Bank <br/>
          <b>008</b>
        </div>
        <div class=" id-bank">
          No. Rekening <br/>
          <b>8426 0002 3553 2242</b>
        </div>
        <div class=" id-bank">
          Nama Pemilik Rekening <br/>
          <b>PT. Pakuan Sport</b>
        </div>
      </div>
    </div>
  </div>
</div>

          </div>
          <?php foreach($getDatabyId as $data){ ?>
          <div class="card">
            <p><b>Jadwal Sewa Lapangan</b></p>
            <p><?php echo $data->nama_lapangan." - ". $data->nama_jenis_lapangan ?></p>
            <p><?php
            // $day = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
             $waktu_mulai = date( 'l, M-d-Y ', strtotime($data->waktu_mulai)); echo $waktu_mulai ?></p>
            <p><?php echo date('H:i a', strtotime($data->waktu_mulai)) . " - " . date('H:i a', strtotime($data->waktu_selesai)); ?> </p>
          </div>
        </div>
        <div class="row">
          <div class="card card-grey">
            <h3>Rincian Harga</h3>
            <div class="row">
              <div class="col-md-5">Durasi Main</div>
              <!-- <div class="col-md-1">
                :
              </div> -->
              <div class="col-md-7 angka">
              <?php echo $jam = $data->duration_time / 60; ?> Jam
              </div>

            </div>
            <div class="row">
              <div class="col-md-5">
                Tarif Sewa perJam
              </div>
              <!-- <div class="col-md-1">
                :
              </div> -->
              <div class="col-md-7 angka">
                <?php echo $this->helptool->rupiah($data->harga_lapangan) ?>
              </div>

            </div>

            <div class="row" style="font-weight: 600;">

              <div class="col-md-5">
                <hr>
              Total Tarif Sewa
              </div>
              <!-- <div class="col-md-1">
                :
              </div> -->
              <div class="col-md-7 angka">
                <hr>
                <?php echo $this->helptool->rupiah($data->total_tarif) ?>
              </div>


            </div>

          </div>

        <?php } ?>

        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        <div class="card">
        <b>Anda sudah membayar?</b>
        <div class="id-bank">
          Setelah melakukan pembayaran, silahkan lakukan konfirmasi pembayaran anda untuk mendapatkan kode booking.
        </div>
        <button type="button" data-target="#modalConfirmBayar" data-toggle="modal" class="btn btn-block" style="color: #3498db; font-size: 1em; font-weight: 600;">Saya Sudah Bayar</button>
        </div>
      </div>
    </div>


  </div>
<?php } ?>
<!-- end of div -->
<!-- Modal -->
<div class="modal fade" id="modalConfirmBayar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmBayarLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <form class="" action="<?php echo base_url('member/add_bukti') ?>" method="post" enctype="multipart/form-data">
        <h4 class="modal-title" id="modalConfirmBayarLabel">Konfirmasi Pembayaran</h4>
      </div>
      <div class="modal-body">



        Upload Bukti Transaksi :
        <input type="hidden" name="xjudul" value="bukti_pembayaran_" >
        <input type="file" name="filefoto" id="imgInp">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes"/>
        <!-- <img id="img-upload"> -->
      </div>
      </form>
    </div>
  </div>
</div>

</div>
<!-- end of div -->

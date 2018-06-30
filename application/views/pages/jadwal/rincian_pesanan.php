<p/>
<style media="screen">

.center{
  margin: auto;
  width: 70%;
  padding: 20px;
}

.panel{
  font-family: 'Montserrat',sans-serif;

}
.panel > .panel-heading{
  font-weight: 600;
}
.textcenter{
  text-align: center;
}

.card{

  padding: 5px 15px 10px 15px;

  font-size: 1.4em;
}
.card-grey{
  background-color: #EEEEEE;
}

.alert{
  margin-bottom: 5px;
}

.panel-body {
  padding-bottom:0;
}
hr{
  border-color: #E0E0E0;
  background-color: #E0E0E0;
}
.angka{
  text-align: right;
}

img{
  /* width: 100px; */
}
.bank-collapse{
  padding-top: 15px;
  padding-bottom: 15px;
}

.img-bank-mandiri{
  width: 100px;
  margin-top: -16px;
  /* height: 10px; */
  margin-right: 15px;
}

.img-bank{
    width: 100px;
    margin-right: 15px;
}
.id-bank{
  color: grey;
  font-size: 1em;
}
b{
  color: black;
}
.sticky{
  position: -webkit-sticky;
  position: sticky;
}


</style>

<div class="row center">

  <div class="col-md-3">
    <ul class="nav nav-pills nav-stacked sticky">
      <li ><a href="#">Dashboard</a></li>
      <li><a href="#">Profil</a></li>
      <li><a href="#">Log Transaksi</a></li>
      <li><a href="pembayaran">Pembayaran</a></li>
    </ul>
  </div>

  <div class="col-md-7">
    <div class="alert alert-success" role="alert">
      <p class="textcenter">Selesaikan pembayaran dalam <b>02:59:40</b> </p>
    </div>
    <div class="panel panel-default">

      <div class="panel-heading textcenter">Rincian Pembayaran </div>
      <div class="alert alert-default">
        No. Pesanan : 072034728
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

          <div class="card">
            <p><b>Jadwal Sewa Lapangan</b></p>
            <p>Lapangan A Rumput INDOOR - FUTSAL</p>
            <p>Senin, 6/25/2018</p>
            <p>08:00 am - 09:00 am</p>
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
              2 Jam
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
                Rp 100.000
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
                Rp 200.000
              </div>


            </div>

          </div>


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

</div>

<!-- Modal -->
<div class="modal fade" id="modalConfirmBayar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmBayarLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalConfirmBayarLabel">Konfirmasi Pembayaran</h4>
      </div>
      <div class="modal-body">
        Upload Bukti Transaksi :
        <input type="multitype/enctype" name="" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('li > a[href="'+pathname+'"]').parent().addClass('active');
})

// $(function() {
//    $("li").click(function() {
//       // remove classes from all
//       $("li").removeClass("active");
//       // add class to the one we clicked
//       $(this).addClass("active");
//    });
// });

</script>

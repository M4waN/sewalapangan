<style media="screen">

.center{
  margin: auto;
  width: 70%;
  padding: 0px;
}

.panel{
  font-family: 'Montserrat',sans-serif;
  margin-bottom: 12rem;

}
.panel > .panel-heading{
  font-weight: 600;
}
.textcenter{
  text-align: center;
}

.card{

  padding: 5px 15px 10px 15px;

  font-size: 1.2em;
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
  /* margin-top: 100px; */
  top: 0;
  padding-top: 60px;
  position: -webkit-sticky;
  position: sticky;
}
.padding{
  padding-top: 60px;
}


</style>

<div class="row center ">

  <div class="col-md-3 sticky sidenav">
    <ul class="nav nav-pills nav-stacked ">
      <li <?php if($this->session->flashdata('active') == 'dashboard') echo "class='active'" ?>><a href="#"><i class="fa fa-television"></i>Dashboard</a></li>
      <li <?php if($this->session->flashdata('active') == 'profile') echo "class='active'" ?>><a href="profile"><i class="fa fa-user"></i> Profil</a></li>
      <li <?php if($this->session->flashdata('active') == 'log_transaksi') echo "class='active'" ?>><a href="#"><i class="fa fa-archive"></i>Log Transaksi</a></li>
      <li <?php if($this->session->flashdata('active') == 'pembayaran') echo "class='active'" ?>><a href="pembayaran"><i class="fa fa-bank"></i>Pembayaran</a></li>
    </ul>
  </div>

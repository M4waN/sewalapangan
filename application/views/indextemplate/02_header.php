<!-- Header -->
<header id="home">
  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('<?php echo base_url('assets/index/'); ?>img/sportcenter.jpg');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Nav -->
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="<?php echo base_url(''); ?>index.php">
            <img class="logo" src="<?php echo base_url('assets/index/'); ?>img/logo.png" alt="logo">
            <img class="logo-alt" src="<?php echo base_url('assets/index/'); ?>img/logo-alt.png" alt="logo">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
          <span></span>
        </div>
        <!-- /Collapse nav button -->
      </div>


      <!--  Main navigation  -->
      <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(''); ?>#home">Home</a></li>
        <li><a href="<?php echo base_url(''); ?>#about">About</a></li>
        <li><a href="<?php echo base_url(''); ?>#fasilitas">Lapangan dan Fasilitas</a></li>
        <li class="has-dropdown"><a href="#contact">Contact</a>
          <ul class="dropdown">
            <li><a href="https://api.whatsapp.com/send?phone=6282311468821" target="_blank" rel="unfollow"><i class="fa fa-whatsapp" ></i> +62 823 1146 8821</a></li>
          </ul>
        </li>

        <a href="#loginModal" data-toggle="modal" ><button type="button" class="btn navbar-btn">Login/Register</button></a>

      </ul>
      <!-- /Main navigation -->

    </div>
  </nav>
  <!-- /Nav -->

  <!-- home wrapper -->
  <div class="home-wrapper">
    <div class="container">
      <div class="row">

        <!-- home content -->
        <div class="col-md-10 col-md-offset-1">
          <div class="home-content">
            <h1 class="white-text">SPORTCENTER</h1>
            <p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.
            </p>
            <a href="<?php echo base_url('home/jadwal'); ?>" class="white-btn">Pesan Sekarang!</a>
            <!-- <button class="main-btn">Learn more</button> -->
          </div>
        </div>
        <!-- /home content -->

      </div>
    </div>
  </div>
  <!-- /home wrapper -->

</header>
<!-- /Header -->

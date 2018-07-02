<!-- Header -->
<header id="home">
  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('<?php echo base_url('assets/index') ?>/img/background1.jpg');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Nav -->
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="index.html">
            <img class="logo" src="<?php echo base_url('assets/index/') ?>img/logo.png" alt="logo">
            <img class="logo-alt" src="<?php echo base_url('assets/index/') ?>img/logo-alt.png" alt="logo">
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
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#fitur">Lapangan dan Fasilitas</a></li>
        <!-- <li><a href="#service">Services</a></li> -->
        <!-- <li><a href="#pricing">Prices</a></li> -->
        <!-- <li><a href="#team">Team</a></li> -->
        <li class="has-dropdown"><a href="#blog">Blog</a>
          <ul class="dropdown">
            <li><a href="blog-single.html">blog post</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>

        <li><?php if($this->session->userdata('status_login') === 'login_member'): ?>
          <a href="<?php echo base_url('member/jadwal'); ?>">Jadwal dan Pesan</a>
        <?php else: ?>
          <a    href="javascript:;"
                data-redirect_url="/jadwal"




                data-toggle="modal" data-target="#loginModal">
              Jadwal dan Pesan
                  </a>
        <?php  endif;  ?>
        </li>

        <?php if($this->session->userdata('status_login') === 'login_member'): ?>

        <li class="has-dropdown"><a href="member/profile">Hi ! <?php echo $this->session->userdata('nama_member') ?></a>
          <ul class="dropdown">
            <li><a href="<?php echo base_url('member'); ?>"><i class="fa fa-user"></i> Dashboard</a></li>

            <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-power-off" ></i> Logout </a></li>
          </ul>
        </li>
      <?php else: ?>
        <a href="#loginModal"  data-toggle="modal"><button type="button" class="btn navbar-btn">Login/Register</button></a>
      <?php endif; ?>
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

            <a href="<?php echo base_url('member/jadwal'); ?>" class="white-btn">Pesan Sekarang!</a>




          </div>
        </div>
        <!-- /home content -->

      </div>
    </div>
  </div>
  <!-- /home wrapper -->

</header>
<!-- /Header -->

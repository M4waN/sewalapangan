
<header>
  <!-- Nav -->
  <nav id="nav" class="navbar">
    <div class="container">



      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="<?php echo base_url(''); ?>index.php">
            <img class="logo" src="<?php echo base_url('assets/index/'); ?>img/logo.png" alt="logo">

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

        <li><a href="<?php echo base_url(); ?>#home">Home</a></li>
        <li><a href="<?php echo base_url(); ?>#about">About</a></li>
        <li><a href="<?php echo base_url(); ?>#fitur">Lapangan dan Fasilitas</a></li>



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
                data-redirect_url="jadwal"

                data-toggle="modal" data-target="#loginModal">
              Jadwal dan Pesan
                  </a>
        <?php  endif;  ?>
        </li>

        <?php if($this->session->userdata('status_login') === 'login_member'): ?>

        <li class="has-dropdown"><a href="<?php echo base_url('member/profile') ?>">Hi ! <?php echo $this->session->userdata('nama_member') ?></a>



          <ul class="dropdown">
            <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-user"></i> Dashboard</a></li>
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

</header>

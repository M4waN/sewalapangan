
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
        <li><a href="<?php echo base_url(''); ?>index.php#home">Home</a></li>
        <li><a href="<?php echo base_url(''); ?>index.php#about">About</a></li>
        <li><a href="<?php echo base_url(''); ?>index.php#portfolio">Portfolio</a></li>
        <li class="has-dropdown"><a href="index.php#contact">Contact</a>
          <ul class="dropdown">
            <li><a href="https://api.whatsapp.com/send?phone=6282311468821" target="_blank" rel="unfollow"><i class="fa fa-whatsapp" ></i> +62 823 1146 8821</a></li>
          </ul>
        </li>

        <a href="#loginModal"  data-toggle="modal"><button type="button" class="btn navbar-btn">Login/Register</button></a>
      </ul>
      <!-- /Main navigation -->

    </div>
  </nav>
  <!-- /Nav -->

</header>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/adminlte2/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo base_url('admin/member'); ?>"><i class="fa fa-book"></i> <span>Data Member</span></a></li>
        <li><a href="<?php echo base_url('admin/datalapangan'); ?>"><i class="fa fa-book"></i> <span>Data Lapangan</span></a></li>
        <li><a href="<?php echo base_url('admin/datapemesanan'); ?>"><i class="fa fa-book"></i> <span>Data Pemesanan</span></a></li>
        <li><a href="<?php echo base_url('admin/datalaporan'); ?>"><i class="fa fa-book"></i> <span>Laporan</span></a></li>

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul> -->
        </li> -->






      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

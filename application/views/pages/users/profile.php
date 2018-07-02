<style media="screen">
img.profile {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
  min-height: 150px;
}
.profile{
  font-size: 0.8em;
}
img.sticky{
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
</style>

    <div class="col-md-7 padding">
      <div class="panel panel-default">
        <div class="panel-heading card">
          <i class="fa fa-user"></i> Profile
        </div>
        <div class="panel-content card">
          <div class="row">
            <div class="col-xs-5 col-md-4">
              <a href="#" class="thumbnail">
                <img src="<?php echo base_url('assets/images/'); ?>team3.jpg" alt="..." class="profile">
              </a>
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <button type="button" name="button">Ganti Profile</button>
                </div>
              </div>

            </div>
            <div class="col-xs-7 col-md-8 profile">

              <div class="row">
                Nama Lengkap<br>
                <b><?php echo $this->session->userdata('nama_member') ?></b>
              </div>
              <div class="row">
                Username<br>
                <b><?php echo $this->session->userdata('username_member') ?></b>
              </div>
              <div class="row">
              Email<br>
                <b><?php echo $this->session->userdata('email_member') ?></b>
              </div>
              <div class="row">
                No. Telp<br>
                <b>+62 823 1146 8821</b>
              </div>
              <div class="row">
                Alamat<br>
                <b>Jl. Jure No. 32 Bantar Jati</b>
              </div>

            </div>

          </div>

        </div>

      </div>
    </div>




</div>


  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">


      <link rel="stylesheet" href="<?php echo base_url();?>assets/index/css/form_style.css">

      <div class="signup-form">
          <?php echo form_open('users/insert'); ?>
          <h2>Register</h2>
          <p class="hint-text">Create your account. It's free and only takes a minute.</p>
              <div class="form-group">
            <div class="row">
              <div class="col-xs-6"><input  class="form-control" name="first_name" placeholder="First Name" required="required"></div>
              <div class="col-xs-6"><input  class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
            </div>
              </div>
                  <div class  ="form-group">
                      <div class  ="input-group">
                          <div class  ="input-group-addon"><i class    ="fa fa-envelope"></i></div>
                          <input type ="email" class="form-control" name="email" placeholder="Email" required="required">
                      </div>
                  </div>

                  <div class  ="form-group">
                      <div class  ="input-group">
                          <div class  ="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type ="username" class="form-control" name="username" placeholder="Username" required="required">
                      </div>
                  </div>
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="fa fa-lock"></i>

                      </span>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
                  </div>
              </div>

          <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="fa fa-check"></i>
                          <i class="fa fa-lock"></i>
                      </span>
                      <input type="password" class="form-control" name="password" id="confirm_password" placeholder="Confirm Password" required="required">
                  </div>
              </div>


      <!-- phone mask -->
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="username" name="phone" class="form-control" placeholder="Phone"
                               data-inputmask="'mask': ['+99 999 9999 9999 99']" data-mask>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

              <div class="form-group">
                  <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                        </div>
                <input type="username" class="form-control" name="alamat" placeholder="Address" required="required">
              </div>

              <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
          </div>
          <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
              </div>
          </form>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
      </div>
    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->
</div>

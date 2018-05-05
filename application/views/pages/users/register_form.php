<style type="text/css">
    body{
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
    }
    .form-control{
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }
    .form-control:focus{
        border-color: #5cb85c;
    }
    .form-control, .btn{        
        border-radius: 3px;
    }
    .signup-form{
        width: 500px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form h2{
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    .signup-form h2:before, .signup-form h2:after{
        content: "";
        height: 2px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }   
    .signup-form h2:before{
        left: 0;
    }
    .signup-form h2:after{
        right: 0;
    }
    .signup-form .hint-text{
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form{
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group{
        margin-bottom: 20px;
    }
    .signup-form input[type="checkbox"]{
        margin-top: 3px;
    }
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;      
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .row div:first-child{
        padding-right: 10px;
    }
    .signup-form .row div:last-child{
        padding-left: 10px;
    }       
    .signup-form a{
        color: #fff;
        text-decoration: underline;
    }
    .signup-form a:hover{
        text-decoration: none;
    }

    .signup-form .fa {
        font-size: 17px;
    }

    .signup-form .fa-envelope {
        font-size: 15px;
    }
    .signup-form .fa-lock {
        font-size: 19px;
    }

    .signup-form .fa-check {
        color: #fff;
        left: 16px;
        top: 18px;
        font-size: 7px;
        position: absolute;
    }
    .signup-form form a{
        color: #5cb85c;
        text-decoration: none;
    }   
    .signup-form form a:hover{
        text-decoration: underline;
    }  
</style>

<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
    <h2>Register</h2>
    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
      <div class="row">
        <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
        <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
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
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>

    <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-check"></i>
                    <i class="fa fa-lock"></i>                  
                </span>
                <input type="password" class="form-control" name="password" placeholder="Confirm Password" required="required">
            </div>
        </div>
           
       
<!-- phone mask -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="Phone" 
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
          <input type="text" class="form-control" name="address" placeholder="Address" required="required">
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


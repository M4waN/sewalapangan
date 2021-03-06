<!-- <script type="text/javascript">

$(document).ready(function(){
		$("button").click(function(){
				var username = $("#username").val().trim();
				var password = $("#password").val().trim();

				if( username != "" && password != "" ){
						$.ajax({
								url:'checkUser.php',
								type:'post',
								data:{username:username,password:password},
								success:function(response){
										var msg = "";
										if(response == 1){
												window.location = "home.php";
										}else{
												msg = "Invalid username and password!";
										}
										$("#message").html(msg);
								}
						});
				}
		});
});

</script> -->

<style type="text/css">
    /* body {
		font-family: 'Varela Round', sans-serif;
	} */
	.modal-login {
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login .close {
        position: absolute;
		top: -10px;
		right: -10px;
	}
	.modal-login h4 {
		color: #636363;
		text-align: center;
		font-size: 26px;
		margin-top: 0;
	}
	.modal-login .modal-content {
		color: #999;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 25px;
    }
	.modal-login .form-group {
		margin-bottom: 20px;
	}
	.modal-login label {
		font-weight: normal;
		font-size: 13px;
	}
	.modal-login .form-control {
		min-height: 38px;
		padding-left: 5px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
		border-radius: 0;
	}
	.modal-login .form-control:focus {
		border-color: #ccc;
	}
	.modal-login .input-group-addon {
		max-width: 42px;
		text-align: center;
		background: none;
		border-width: 0 0 1px 0;
		padding-left: 5px;
		border-radius: 0;
	}
    .modal-login .btn {
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
        border-radius: 3px;
		border: none;
		min-width: 140px;
        outline: none !important;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #179b81;
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer {
		color: #999;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -25px -25px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login a {
		color: #fff;
		text-decoration: underline;
	}
	.modal-login a:hover {
		text-decoration: none;
	}
	.modal-login a {
		color: #19aa8d;
		text-decoration: none;
	}
	.modal-login a:hover {
		text-decoration: underline;
	}
	.modal-login .fa {
		font-size: 21px;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>

<!-- akhir style form login -->

<!-- form login -->
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->

</div>



<center>
<!-- Modal HTML -->
<div role="dialog" tabindex="-1" id="loginModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<?php if($this->session->flashdata('error-msg') == TRUE) : ?>
			  <div class="alert alert-danger" role="alert">
			    <?php echo $this->session->flashdata('error-msg') ?>
			  </div>
			<?php endif; ?>
				<h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('auth/auth_login_member'); ?>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="hidden" id="redirect_url" name="redirect_url">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button id="but_submit" name="but_submit" type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="modal-footer">Don't have an account? <a href="<?php echo base_url("") ?>register">Create one</a></div>
		</div>
	</div>
</div>
<!-- akhir form login -->
</center>

<script type="text/javascript">

  $(document).ready(function() {
		$('#loginModal').on('show.bs.modal', function (event) {
		var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		var modal          = $(this)

		// Isi nilai pada field
		modal.find('#redirect_url').attr("value",div.data('redirect_url'));
		});
});
</script>


<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php foreach ($user as $u) { ?>
	<?php echo form_open('users/update'); ?>
	
		<label>Username</label><br/>
		<input type="hidden" name="id" value="<?php echo $u->id_users;?>">
		<input type="text" name="username" value="<?php echo $u->username; ?>"> <br/>
		<label>Password</label><br/>
		<input type="password" name="password" value="<?php echo $u->password; ?>"><br/>
		<label>Nama</label><br/>
		<input type="text" name="nama" value="<?php echo $u->fullname; ?>"><br/>
		<label>Email</label><br/>
		<input type="text" name="email" value="<?php echo $u->email; ?>"><br/>
		<select name="level">
		  <option>Pilih</option>
		  <option value="admin">Admin</option>
		  <option value="pegawai">Pegawai</option>
		</select>
		<input type="submit" value="Simpan">
	</form>
	<?php }?>

</body>
</html>
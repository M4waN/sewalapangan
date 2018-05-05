<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th >Action</th>
		</tr>
		<?php $no=1; foreach($user as $u){ ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->level ?></td>
			<td><?php echo anchor('users/delete/'. $u->id_users, 'Delete'); ?>  | <?php echo anchor('users/edit/'. $u->id_users , 'Update' ); ?></td> 

			<td></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
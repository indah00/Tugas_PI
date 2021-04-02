<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah - CRUD Codeigninter</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?> assets/jquery.js"></script>
	<script src="<?php echo base_url(); ?> assets/js/bootstrap.min.js"></script>  
</head>

<div id="body">
<body>

	<div id="container">
	<h1> Form Tambah Data Mahasiswa</h1>

	<hr>

	<div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("mahasiswa/tambah"); ?>
	<table cellpadding="8" align="center">
		<tr align="left">
			<th>NIM</th>
			<th><input type="text" name="input_nis" value="<?php echo set_value('input_nis'); ?>"></th>
		</tr>
		<tr align="left">
			<td>Nama</td>
			<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
		</tr>
		<tr align="left">
			<th>Jenis Kelamin</th>
			<th><input type="radio" name="input_jeniskelamin" value="Laki-laki"<?php echo set_radio('jeniskelamin','Laki-laki'); ?> >Laki-laki
				<input type="radio" name="input_jeniskelamin" value="Perempuan"<?php echo set_radio('jeniskelamin','Perempuan'); ?> >Perempuan</th>
		<tr align="left">
			<td>Telepon</td>
			<td><input type="text" name="input_telp" value="<?php echo set_value('input_telp'); ?>"></td>
		</tr>
		<tr align="left">
			<th>Alamat</th>
			<th><textarea name="input_alamat" value="<?php echo set_value('input_alamat'); ?>"></textarea></th>
		</tr>
	</table>

	<hr>
	<input type="submit" name="submit" value="Simpan" class="button1">
	<a href="<?php echo base_url(); ?>"><input type="button" value="Batal" class="button1"></a>
	<?php echo form_close(); 
	?>
</body>
</html>
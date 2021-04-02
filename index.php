<!DOCTYPE html>
<html>
<head>
	<title>CRUD Codeigniter</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?> assets/jquery.js"></script>
	<script src="<?php echo base_url(); ?> assets/js/bootstrap.min.js"></script>
</head>
<div id="body">
<body>
	<div id="container">
	<h1>Data Mahasiswa</h1>
</div>
		<a href= '<?php echo base_url("mahasiswa/tambah");?>'class="footer">Tambah Data</a><br><br>
	</div>

	<table align="center">
		<tr align="center">
			<th>NIM</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>TELEPON</th>
			<th>ALAMAT</th>
			<th colspan="2">AKSI</th>
		</tr>
		
		<?php
		if( ! empty($mahasiswa)){
			foreach ($mahasiswa as $data){
			echo "<tr>
			<td>".$data->nis."</td>
			<td>".$data->nama."</td>
			<td>".$data->jenis_kelamin."</td>
			<td>".$data->telp."</td>
			<td>".$data->alamat."</td>
			<td><button class='button1'><a href=".base_url("mahasiswa/ubah/".$data->nis).">Ubah</a></td>
			<td><button class='button1'><a href=".base_url("mahasiswa/hapus/".$data->nis).">Hapus</a></td>
			</tr>
		<tr>";
		}
	}
		else{
			echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
		}
		?>
	</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: yellow">
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	<div>Admin</div>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Admin</th>
			<th>Alamat</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Amfita</td>
			<td>Semarang</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Dewi</td>
			<td>Semarang</td>
		</tr>
		
	</table>
	<br>
	<div>Guru</div>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama Guru</td>
			<td>Mapel</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Didik Sri P</td>
			<td>Pkk dan Basis Data</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Wenang</td>
			<td>Matematika</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Sauqi</td>
			<td>PAI</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Syaeful Komar</td>
			<td>PWPB</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Septian Adi</td>
			<td>PBO</td>
		</tr>
	</table>
	<br>
	
	<br>
	<a href="logout.php">Logout</a>

	<br/>
	<br/>

</body>
</html>
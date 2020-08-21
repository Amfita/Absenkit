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
	<h1>Halaman Guru</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	
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
	<a href="logout.php">Logout</a>

	<br/>
	<br/>

</body>
</html>
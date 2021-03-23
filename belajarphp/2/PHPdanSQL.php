<?php 
session_start();

//agar user tidak dapat masuk ke dalam web ini secara langsung
if ( !isset($_SESSION["berhasil"])){
	header('Location: login1.php');
	exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//mencari data jika di tekan tombol cari
if (isset($_POST["submit"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>	
<body>
	<a href="logout1.php">Logout</a>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>

	<form action="" method="POST">
		<input type="text" name="keyword" placeholder="Masukan nama....." autofocus autocomplete="off" size="40">
		<button name="submit">Cari</button>
	</form>
<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Gambar</th>	
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $mhs) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id= <?= $mhs["id"]; ?>">ubah</a> |
			<a href="hapus.php?id= <?= $mhs["id"]; ?>" onclick="return confirm ('yakin ?')">hapus</a>
		</td>
		<td><?= $mhs["nrp"]; ?></td>
		<td><?= $mhs["nama"]; ?></td>
		<td><?= $mhs["email"]; ?></td>
		<td	><?= $mhs["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
  	<?php endforeach ; ?>
  	
</table>
</body>
</html>
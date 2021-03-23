<?php 
//cek apakah tidak ada data pada $_GET
if (  !isset($_GET["nama"]) ||
	  !isset($_GET["Jurusan"]) ||
	  !isset($_GET["Kelas"]) ) {
	//redirect
	header("Location: GET2.php"); 
	exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>GET & POST</title>
</head>
<body>
<h1>Detail nama</h1>
<ul>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["Jurusan"]; ?></li>
	<li><?= $_GET["Kelas"]; ?></li>
</ul>
<a href="pertemuan2.php"> Kembali ke Daftar Nama</a>
</body>
</html>
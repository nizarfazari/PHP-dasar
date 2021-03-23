<?php 

session_start();


//agar user tidak dapat masuk ke dalam web ini secara langsung
if ( !isset($_SESSION["berhasil"])){
	header('Location: login1.php');
	exit;
}

require 'functions.php';
if (isset($_POST["submit"])) {
	
//cek apakah data berhasil dimasukan 
if( tambah($_POST) > 0 ){
	echo "
		<script>
		alert('data berhasil ditambahkan');
		document.location.href = 'PHPdanSQL.php'
		</script>
		";
	}  else {
	echo "
		<script>
		alert('data tidak berhasil ditambahkan');
		document.location.href = 'PHPdanSQL.php'
		</script>
		";
 	}
}	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>

</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">
	<ul>
		<li>
			<label for="nrp">NRP : </label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email">
		</li>
		<li>	
			<button type="submit" name="submit">Tambahkan data</button>
		</li>
	</ul>
	</form>

</body>
</html>
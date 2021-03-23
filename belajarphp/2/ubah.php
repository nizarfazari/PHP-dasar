<?php 
session_start();


//agar user tidak dapat masuk ke dalam web ini secara langsung
if ( !isset($_SESSION["berhasil"])){
	header('Location: login1.php');
	exit;
}

require 'functions.php';

//ambil data URL
$id = $_GET["id"];
//menambahkan data pada mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
	
//cek apakah data berhasil dimasukan 
if( ubah($_POST) > 0 ){
	echo "
		<script>
		alert('data berhasil diubah');
		document.location.href = 'PHPdanSQL.php'
		</script>
		";
	}  else {
	echo "
		<script>
		alert('data tidak berhasil diubah');
		document.location.href = 'PHPdanSQL.php'
		</script>
		";
 	}
}	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Mahasiswa</title>

</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post">
	<input type="hidden" name="id" value="<?= $mhs["id"] ?>">
	<ul>
		<li>
			<label for="nrp">NRP : </label>
			<input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"] ?>">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>" >
		</li>
		<li>
			<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
		</li>
		<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
		</li>
		<li>	
			<button type="submit" name="submit">Ubah data</button>
		</li>
	</ul>
	</form>

</body>
</html>
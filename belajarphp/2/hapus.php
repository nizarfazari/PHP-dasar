<?php 

session_start();


//agar user tidak dapat masuk ke dalam web ini secara langsung
if ( !isset($_SESSION["berhasil"])){
	header('Location: login1.php');
	exit;
}

require 'functions.php';
$id = $_GET["id"];



	
//cek apakah data berhasil dimasukan 
if( hapus($id) > 0 ){
	echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href = 'PHPdanSQL.php'
		</script>
		";
	}  else {
	echo "
		<script>
		alert('data tidak berhasil di hapus');
		document.location.href = 'PHPdanSQL.php'
		</script>
		";
 	}
	


 ?>

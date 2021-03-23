<?php  
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

//Fungsi pada query pada pengisian data
function query($mahasiswa){
	global $conn;
	$result = mysqli_query($conn,$mahasiswa);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}


//menambahkan data
function tambah($data){
	global $conn;
	//ambil data dari tiap elemen
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$email = htmlspecialchars($data["email"]);
//query insert data
	$query = " INSERT INTO mahasiswa 
			         VALUES 
			  ('','$nrp','$nama','$jurusan','$email')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

//menghapus data
function hapus($id){
	global $conn;
	//query menghapus data
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id" );
	return mysqli_affected_rows($conn);
}

//fungsi untuk mengubah
function ubah($data){
	global $conn;
	//ambil data dari tiap elemen
	$id = $data["id"];
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$email = htmlspecialchars($data["email"]);
//query mengubah data
	$query = " UPDATE mahasiswa SET
				nrp = '$nrp',
				nama = '$nama',
				jurusan = '$jurusan',
				email = '$email'
				WHERE id = '$id'
			  ";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

//fungsi untuk mencari
function cari($keyword){
//query untuk mengubah
	$query = "SELECT * FROM mahasiswa
				WHERE 
				nama LIKE '%$keyword%' OR 
				nrp LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' OR 
				email LIKE '%$keyword%'
				";
	return query($query);
}

function registrasi($data){
	global $conn;
	$username = stripslashes(strtolower($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);	
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	//mengecek sudah ada yang pakai atau belum
	$sama = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

	if (mysqli_fetch_assoc($sama)){
		echo "<script>
            alert('username ini sudah terpakai');
        </script>";
        return false;
	}

	//cek konfirmasi password dengan password2
	if( $password !== $password2){
		 echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
	}
	//enskripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

	return mysqli_affected_rows($conn);
}



?>
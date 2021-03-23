
<?php
//Array Associative  
$daftarnama = [
["nama" => "Nizar Fazari",
 "Jurusan" => "Sistem Informai",
 "Kelas" => "SI06",
 ],
["nama" => "Gibud",
 "Jurusan" => "Teknologi Informasi",
 "Kelas" => "TI05"]
];	
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Nama	</h1>
<ul>
<?php  foreach($daftarnama as $a) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $a["nama"]; ?>&Jurusan=<?= $a["Jurusan"]; ?>&Kelas=<?= $a["Kelas"]; ?>"><?= $a["nama"]; ?></a>
	</li>	
<?php endforeach; ?>
</ul>
</body>
</html>
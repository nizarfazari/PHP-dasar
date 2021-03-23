<?php 
//cek tombol submit sudah di tekna atau belum
if ( isset($_POST["submit"])  ){

	//cek username dan password
	if ($_POST["username"] == "Archipelag" && $_POST["pasword"] == "123") 
	{
	//jika benar tampilkan halaman admin	
		header("Location: Logout.php");
		exit;	
	}else {$error = true;}
}?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		
	</style>
</head>
<body>
<h1>Silahkan Login</h1>

<?php if(isset($error) ) : ?>
<p style="color : red; font-style: bold;">Username dan password salah!!</p>
<?php endif; ?>


<ul>
<form action="" method="post">
	<li>
		<label for="username">Username = </label>
		<input type="text" name="username" id="username">
	</li>
	<br>
	<li>
		<label for="pasword">Pasword  = </label>
		<input type="Password" name="pasword" id="pasword">
	</li>
	benar
	<button type="submit" name="submit">submit</button>
		
</form>

</ul>
</body>
</html>
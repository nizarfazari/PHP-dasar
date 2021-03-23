<?php 
//untuk memulai session
session_start();

if ( isset($_SESSION["berhasil"]) ){
    header("Location: PHPdanSQL.php");
    exit;
}
require 'functions.php';
if ( isset($_POST["submit"])){

    //memilah antara username dan password yang di masukan user
    $username = $_POST["username"];
    $password = $_POST["password"];

    //mengecek kesamaan antara username yang di masukan user dan username pada database
    $sama = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");


    //apakah ada atau tidak username dan password pada databasse
    if (mysqli_num_rows($sama) === 1){
        //cek password dengan mengambil password pada username (pada query $sama) 
        $row = mysqli_fetch_assoc($sama);
        //kebalikan dari password_hash 
        if (password_verify($password, $row["password"])){
            //mengecek session
            $_SESSION["berhasil"] = true; 
            header("Location: PHPdanSQL.php");
            exit;
        }
    }

$error = true;
}
 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="box" action="" method="post">
        <h1>Login</h1>
<?php 
    if ( isset($error)) :?>
        <p style="color:grey ; font-style: italic;">username atau password salah,silahkan cek ulang kembali</p>
<?php endif; ?>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>



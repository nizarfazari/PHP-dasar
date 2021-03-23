<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $data['judul']; ?></title>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL;  ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="contain">
        <div class="container-fluid mt-1 mb-1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="<?= BASEURL;?>/default">Latihan MVC</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= BASEURL;  ?>/default">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL;  ?>/mahasiswa" >Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>




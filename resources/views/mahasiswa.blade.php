<!DOCTYPE html> <!-- Mendefinisikan dokumen HTML5 -->
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Encoding karakter UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Agar responsive di mobile -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Kompatibilitas dengan IE -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <title>Data Mahasiswa</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
            </li>
            <!-- Blade Template Engine -->
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Konten Utama -->
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <!-- List Mahasiswa -->


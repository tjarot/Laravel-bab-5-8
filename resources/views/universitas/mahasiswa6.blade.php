<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Daftar Mahasiswa</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center mt-5 fade-in">
    <h1 class="mb-4 title-text">Daftar Mahasiswa</h1>
    
    <div class="card shadow-lg p-4 rounded-4 modern-card">
        <ol class="list-group list-group-numbered mb-4">
            <?php
            foreach ($mahasiswa6 as $nama) {
                echo "<li class=\"list-group-item custom-item\">$nama</li>";
            }
            ?>
        </ol>
    </div>

    <div class="image-gallery d-flex justify-content-center flex-wrap mt-4">
        <div class="img-box"><img src="/img/5.png" alt="Mahasiswa 1"></div>
        <div class="img-box"><img src="/img/6.png" alt="Mahasiswa 2"></div>
        <div class="img-box"><img src="/img/7.png" alt="Mahasiswa 3"></div>
        <div class="img-box"><img src="/img/8.png" alt="Mahasiswa 4"></div>
    </div>

    <footer class="mt-4 footer-text">
        Copyright © <?php echo date("Y"); ?> AraMilkTea
    </footer>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>

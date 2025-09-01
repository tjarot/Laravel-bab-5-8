<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Daftar Mahasiswa</title>
<link href="/css/my-style.css" rel="stylesheet">
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ol>
<?php
foreach ($mahasiswa5 as $nama) {
echo "<li> $nama </li>";
}
?>
</ol>

<div class="image-container">
<img src="/img/1.png">
<img src="/img/2.png">
<img src="/img/3.png">
<img src="/img/4.png">
</div>

<div class="icon">
Copyright © <?php echo date("Y"); ?> AraMilkTea
</div>
<script src='/js/my-script.js'></script>
</body>
</html>


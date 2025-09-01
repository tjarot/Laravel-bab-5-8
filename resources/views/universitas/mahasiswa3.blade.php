<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
        foreach ($mahasiswa3 as $nama) {
            echo "<li> $nama </li>";
        }
    ?>
    </ol>
</body>
</html>
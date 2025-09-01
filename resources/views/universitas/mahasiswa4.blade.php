<?php
$mahasiswa01 = "Tiara";
$mahasiswa02 = "Tjarot";
$mahasiswa03 = "Ara";
$mahasiswa04 = "Aira";

$arr = compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #80b7ffff, #78a7fdff);
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #ffffffff;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px #00226162;
            width: 200px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .avatar {
            width: 80px;
            height: 80px;
            background-color: #eee;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #555;
            font-weight: bold;
        }
        .name {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <div class="container">
        <?php 
        foreach ($arr as $nama) {
            $inisial = strtoupper(substr($nama, 0, 1)); 
            echo "
            <div class='card'>
                <div class='avatar'>{$inisial}</div>
                <div class='name'>{$nama}</div>
            </div>";
        }
        ?>
    </div>

</body>
</html>

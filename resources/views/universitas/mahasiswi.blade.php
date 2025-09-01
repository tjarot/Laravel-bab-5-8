<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8dc5fdff;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 93, 155, 1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #0070bbff;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Data Siswi XI RPL</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
        </tr>
        <tr><td>1</td><td>Aprilia Mutiara Kasih</td></tr>
        <tr><td>2</td><td>Aulia Fitri</td></tr>
        <tr><td>3</td><td>Aventina</td></tr>
        <tr><td>4</td><td>Christyn Febina Br Surbakti</td></tr>
        <tr><td>5</td><td>Elvis Aprilla</td></tr>
        <tr><td>6</td><td>Ghea Melanisa Ayu Sagita</td></tr>
        <tr><td>7</td><td>Mia Agustina Timba Dua</td></tr>
        <tr><td>8</td><td>Selfi Yunita</td></tr>
    </table>
    <footer style="text-align:center; margin-top:20px;">
    Copyright © <?php echo date("Y"); ?> AraMilkTea 
</footer>
</body>
</html>

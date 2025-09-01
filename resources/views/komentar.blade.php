<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/css/komentar.css">
</head>
<body>
    <div class="container">

        {{-- Menampilkan nama mahasiswa --}}
        <h1 class="nama">{{ $nama }}</h1>
        <br>

        {{-- 
            Contoh komentar Blade
            Kode di bawah tidak akan dieksekusi
            @foreach($nilai as $val)
                <div>{{ $val }}</div>
            @endforeach
        --}}

        {{-- Contoh PHP mode --}}
        <h2>Debug Array Nilai</h2>
        @php
            var_dump($nilai);
        @endphp

    </div>
</body>
</html>

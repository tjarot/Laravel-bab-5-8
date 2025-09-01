<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Foreach Blade</title>
    <link rel="stylesheet" href="/css/foreach.css"> <!-- Pakai CSS card sebelumnya -->
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <!-- Menampilkan nama -->
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>

        <!-- Mengecek apakah array $nilai ada isinya -->
        @if(count($nilai) > 0)
            <!-- Perulangan foreach untuk setiap nilai -->
            @foreach($nilai as $val)
                @if(($val >= 0) && ($val < 50))
                    <div class="alert alert-danger d-inline-block mb-2">{{ $val }}</div>
                @elseif(($val >= 50) && ($val <= 100))
                    <div class="alert alert-success d-inline-block mb-2">{{ $val }}</div>
                @endif
            @endforeach
        @else
            <!-- Jika array kosong -->
            <div class="alert alert-dark d-inline-block mb-2">Tidak ada data...</div>
        @endif
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Continue & Break Blade</title>
    <link rel="stylesheet" href="/css/forelse.css"> <!-- CSS modern -->
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">

        {{-- Nama Siswa --}}
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>

        {{-- Contoh penggunaan @continue --}}
        <h2>Nilai >= 50 (menggunakan {{ '@continue' }})</h2>
        @foreach($nilai as $val)
            @if($val < 50)
                @continue
            @endif
            <div class="card alert-success mb-2">
                {{ $val }}
            </div>
        @endforeach
        <br>

        {{-- Contoh penggunaan @break --}}
        <h2>Perulangan berhenti saat menemukan nilai < 50 (menggunakan {{ '@break' }})</h2>
        @foreach($nilai as $val)
            @if($val < 50)
                @break
            @endif
            <div class="card alert-success mb-2">
                {{ $val }}
            </div>
        @endforeach

    </div>
</body>
</html>



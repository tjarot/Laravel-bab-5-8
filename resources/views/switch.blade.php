<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Nilai (Switch)</title>
    <link rel="stylesheet" href="/css/siswa.css">
</head>
<body>
    <div class="container">
        @foreach($nama as $index => $n)
            <div class="card">
                <!-- Nama Siswa -->
                <h2>{{ $n }}</h2>

                <!-- Nilai -->
                <p>Nilai: {{ $nilai[$index] }}</p>

                <!-- Status berdasarkan SWITCH -->
                @switch($nilai[$index])
                    @case(0)
                        <div class="alert alert-danger">Tidak ikut ujian</div>
                        @break

                    @case(75)
                        <div class="alert alert-success">Lumayan</div>
                        @break

                    @case(100)
                        <div class="alert alert-success">Sempurna</div>
                        @break

                    @default
                        <div class="alert alert-dark">Nilai tidak valid</div>
                @endswitch
            </div>
        @endforeach
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <!-- Encoding UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Kompatibilitas IE -->
    <link rel="stylesheet" href="/css/siswa.css"> <!-- CSS custom -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Daftar Siswa</title>
</head>
<body>
    <!-- Container utama -->
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-dark px-3 py-2 text-white text-center d-inline-block mb-4">
            Daftar Siswa dan Status Kelulusan
        </h1>

        <!-- Tabel siswa -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nama as $index => $n)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                        <td>{{ $n }}</td> <!-- Nama siswa -->
                        <td>{{ $nilai[$index] }}</td> <!-- Nilai siswa -->

                        <!-- Kondisi kelulusan menggunakan Blade -->
                        <td>
                            @if (($nilai[$index] >= 0) and ($nilai[$index] < 50))
                                <div class="alert alert-danger d-inline-block mb-0">Maaf, anda tidak lulus</div>
                            @elseif (($nilai[$index] >= 50) and ($nilai[$index] <= 100))
                                <div class="alert alert-success d-inline-block mb-0">Selamat, anda lulus</div>
                            @else
                                <div class="alert alert-dark d-inline-block mb-0">Nilai tidak valid</div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>


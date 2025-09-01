<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <!-- Encoding UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Kompatibilitas IE -->
    <link rel="stylesheet" href="/css/siswa.css"> <!-- File CSS custom -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Data Siswa</title>
</head>
<body>
    <!-- Container utama dengan background putih dan text-center -->
    <div class="container text-center mt-3 py-3 bg-white">
        <!-- Judul utama, rata tengah, background gelap, text putih -->
        <h1 class="bg-dark px-3 py-2 text-white text-center d-inline-block mb-4">
            Daftar Siswa dan Nilai
        </h1>

        <!-- Tabel siswa -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <!-- Looping nama & nilai menggunakan Blade -->
                @foreach($nama as $index => $n)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                        <td>{{ $n }}</td> <!-- Menampilkan nama -->
                        <td>{{ $nilai[$index] }}</td> <!-- Menampilkan nilai -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Menampilkan rata-rata nilai -->
        <div class="alert alert-info mt-4">
            <strong>Rata-rata Nilai: {{ number_format(array_sum($nilai) / count($nilai), 2) }}</strong>
        </div>

        <!-- Contoh penggunaan fungsi date() -->
        <p class="mt-2 text-muted">
            Tanggal hari ini: {{ date(now()) }}
        </p>

        <!-- Contoh menampilkan HTML dari variabel (jika perlu) -->
        {{-- {!! $nama_html !!} --}}
    </div>
</body>
</html>

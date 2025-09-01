<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan For Blade</title>
    <link rel="stylesheet" href="/css/for.css">
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-2 text-white d-inline-block mb-4">
            Contoh Perulangan For
        </h1>

        <!-- Menampilkan teks "Laravel" sebanyak 5 kali -->
        @for ($i = 0; $i < 5; $i++)
            <div class="alert alert-info d-inline-block mb-2">
                Laravel
            </div>
        @endfor

        <br><br>

        <!-- Menampilkan angka counter $i sebanyak 5 kali -->
        @for ($i = 0; $i < 5; $i++)
            <div class="alert alert-success d-inline-block mb-2">
                {{ $i }}
            </div>
        @endfor
    </div>
</body>
</html>

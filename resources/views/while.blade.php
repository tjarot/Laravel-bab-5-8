<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan While Blade</title>
    <!-- Menghubungkan file CSS card/alert sebelumnya -->
    <link rel="stylesheet" href="/css/for.css">
</head>
<body>
    <!-- Container utama -->
    <div class="container text-center mt-3 pt-3 bg-white">
        <!-- Judul utama -->
        <h1>Contoh Perulangan While</h1>

        <!-- Inisialisasi counter $i dengan nilai awal 0 -->
        <?php $i = 0; ?>

        <!-- Perulangan while: selama $i < 5, blok akan dieksekusi -->
        @while($i < 5)
            <!-- Blok item/card menampilkan nilai counter $i -->
            <div class="item alert-info">
                {{ $i }} <!-- Menampilkan nilai $i -->
            </div>

            <!-- Increment counter $i agar loop tidak infinite -->
            <?php $i++; ?>
        @endwhile
    </div>
</body>
</html>

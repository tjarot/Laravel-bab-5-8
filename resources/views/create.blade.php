<!DOCTYPE html>
<html>
<head>
    <title>Input Siswa Baru</title>
</head>
<body>
    <h2>Form Input Siswa</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIS:</label><br>
        <input type="text" name="nis"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>

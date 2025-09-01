<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo dari Laravel!';
});

Route::get('/mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});

// Route Parameter (mengambil nilai yang ada di dalam alamat URL)
// cara menjalankan contoh [http://localhost:8000/mahasiswa/Tiara]

//Route Prameter 1
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});
//Route Paramete 2
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

//Route Optional Parameter 
Route::get('/stok_barang/{jenis?}/{merek?}',
function ($a = 'smartphone',$b = 'samsung') {
    return "Cek sisa stok untuk $a $b";
});

//Route Parameter dengan Regular Expression
//dipakai jika kita ingin penulisan alamat URL harus memenuhi pola tertentu.
//id terdiri dari angka saja.
Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
}); //->where('id', '[0-9]+'); parameter 'id' hanya bisa diakses jika memenuhi pola regular expression '[0-9]+'

//Route Redirect, menghubungkan halaman kedua ke halaman pertama atau route pertama akan menghubungkan route kedua
Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');

//Route Group (proses secara kelompok) menggunakan Route::prefix() untuk menggabungkan beberapa halaman 
Route::prefix('/admin')->group(function () {

Route::get('/mahasiswa', function () {
    echo "<h1>Daftar Mahasiswa</h1>";
});

Route::get('/dosen', function () {
    echo "<h1>Daftar Dosen</h1>";
});

Route::get('/karyawan', function () {
    echo "<h1>Daftar Karyawan</h1>";
});

});

// Route Fallback, digunakan saat route tidak mau berjalan atau alamat URL tidak ditemukan 
Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

// Route Priority 
//Route Priority tanpa parameter, jika alamat URL dijalankan sistem akan membaca bagian terakhir
Route::get('/buku/1', function () {
    return "Buku ke-1";
});

Route::get('/buku/1', function () {
    return "Buku saya ke-1";
});

Route::get('/buku/1', function () {
    return "Buku kita ke-1";
});

//Route Priority menggunakan parameter
Route::get('/book/{a}', function ($a) {
    return "Buku ke-$a";
});

Route::get('/book/{b}', function ($b) {
    return "Buku saya ke-$b";
});

Route::get('/book/{c}', function ($c) {
    return "Buku kita ke-$c";
});

//Penulisan URL Route, diawali dengan forward slash
//Tanpa forward slash
Route::get('mahasiswa/andi', function () {
echo "Halaman mahasiswa andi";
});

//Menggunakan forward slash 
Route::get('/mahasiswa/andi', function () {
echo "Halaman mahasiswa andi";
});

//Kesimmpilannya dari kedua codingan di atas tidak ada bedanya, saat dijalankan alamat URL akan memproses sama
//Jiaka tidak mau menambahkan file bawaan laravel (php artisan route:list --except-vendor)
//Melihat daftar route (php artisan route:list)
//Sisi paling kiri berisi route method, sisi tengah berisi alamat URL, dan sisi kanan berisi nama controller

//Error Display & Proses Debugging 
Route::get('/mahasiswa/rangga', function () {
echo "Halaman mahasiswa Rangga";
});

//menggunakan fungsi var_dump() atau print_r() untuk menampilkan struktur detail dari suatu variabel
Route::get('/hello_ara', function () {
    $hello_ara = 'Hello Ara';
    var_dump($hello_ara);

    return $hello_ara;
});
// menggunakan die() agar tidak terjadi perulangan 
Route::get('/hello_aira', function () {
    $hello_ara = 'Hello Aira';
    var_dump($hello_ara);
    die();

    return $hello_ara;
});
// function dd() singkatan dari dump dan die, kode ini lebih efisien dan mampu menampilkan isi dari suatu variebel
Route::get('/hello_Tiara', function () {
    $hello_ara = 'Hello Tiara';
    dd($hello_ara);

    return $hello_ara;
});

Route::get('/hello_Tjarot', function () {
    $hello_Tjarot = ['Tiara', 3 => ['Lucu', 'Imout', 'Ketchey']];
    dd($hello_Tjarot);

    return $hello_Tjarot;
});

// function dump() tidak akan menghentikam kode program dan hanya akan menampilkan isi variabel saja
Route::get('/hello_jarot', function () {
    $hello_jarot = ['Tiara', 3 => ['Lucu', 'Imout', 'Ketchey']];
    dump($hello_jarot);

    return $hello_jarot;
});

// function print_r() untuk menampilkan isi array, Kalau route mengembalikan print_r() dan tidak return apa pun, Laravel akan tetap mencoba membuat response kosong, kadang memicu perilaku aneh
//tanpa return
Route::get('/tes', function () {
    $data = [
        'nama' => 'Ara',
        'kelas' => 'RPL',
        'hobi' => ['ngoding', 'desain']
    ];

    print_r($data);
});
//menggunakan return
Route::get('/tes2', function () {
    $data2 = [
        'nama' => 'Ara',
        'kelas' => 'RPL',
        'hobi' => ['ngoding', 'desain']
    ];

    echo '<pre>';
    print_r($data2);
    echo '<pre>';
    die();

    return $data2;
});



//View
//Blade adalah sebuah templating engine bawaan Laravel. Jadi jika ingin membuat file di resources/views harus menambahkan blade
//Alamat URL dan nama view tidak harus sama
Route::get('/mahasiswi', function () {
return view('universitas.mahasiswi');
});

// Route::get('/mahasiswa2', function () {
// return View::make('mahasiswa');
// });

//Kedua penulisan di atas sama, view() adalah adalah sebuah helper function, yakni function bantu yang disediakan oleh Laravel. Sedangkan, View:make() dikenal dengan istilah facade (design pattern), teknikk membungkus fitur dalam bentuk static method

Route::get('/menu', function () {
$lapar = ["Bakso", "Mie Ayam", "Kebab", "Sate"];

return view('menu', ['menu' => $lapar]);
});

//memakai view method with (method chaining)
// Route::get('/mahasiswa3', function () {
// return view('universitas.mahasiswa3')->with('mahasiswa01', 'Risa Lestari');
// });

Route::get('/mahasiswa3', function () {
$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
"Lisa Permata"];

return view('universitas.mahasiswa3')->with('mahasiswa3', $arrMahasiswa);
});

//cara chaining untuk memanggil beberapa kali
// Route::get('/mahasiswa', function () {
// return view('universitas.mahasiswa')
// ->with('mahasiswa01', 'Risa Lestari')
// ->with('mahasiswa02', 'Rudi Hermawan')
// ->with('mahasiswa03', 'Bambang Kusumo');
// });

// menyambung secara langsung (with<nama_variabel>(nilai_variabel)) contoh : view('universitas.mahasiswa')->withmahasiswa01('Risa Lestari');

//Function compact()
Route::get('/mahasiswa4', function () {

    $mahasiswa01 = "Tiara";
    $mahasiswa02 = "Tjarot";
    $mahasiswa03 = "Ara";
    $mahasiswa04 = "Aira";

    return view('universitas.mahasiswa4', compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"));
});
//with()
// Route::get('/mahasiswa4', function () {

//     $mahasiswa01 = "Tiara";
//     $mahasiswa02 = "Tjarot";
//     $mahasiswa03 = "Ara";
//     $mahasiswa04 = "Aira";

//     return view('universitas.mahasiswa4')->with(compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"));
// });

// Route::get('/mahasiswa/{nama}/{umur}/{kotaAsal}',
// function ($nama, $umur, $kotaAsal) {
// return view('universitas.mahasiswa')
// ->with('nama', $nama)
// ->with('umur', $umur)
// ->with('kotaAsal', $kotaAsal);
// });


// Pengelolaan Assets
Route::get('/mahasiswa5', function () {
    $arrMahasiswa = ["Azura Lestari Maheswari","Cendana Arunika Prameswari","Indira Sarasvati Damayanti",
    "Savira Ayuningtyas Kirana"];

    return view('universitas.mahasiswa5',['mahasiswa5' => $arrMahasiswa]);
});

Route::get('/mahasiswa6', function () {
    $arrMahasiswa = ["Arka Pradana Wicaksana","Raka Mahendra Pratama","Bimasena Arya Pradipta",
    "Aksara Nugraha Laksamana"];

    return view('universitas.mahasiswa6',['mahasiswa6' => $arrMahasiswa]);
});


// BLADE TEMPLATE ENGINE berisi perintah tambahan untuk mempermudah pembuatan template, mempersingkat penulisan 
// MENAMPILKAN DATA
Route::get('/siswa', function () {
    $nama = ['Aruna Lestari Kirana', 'Nayara Prameswari Cendani', 
    'Selasih Damayanti Ayu', 'Aurora Ayuningtyas Larasati', 'Savira Indah Pradipta',
    'Arka Maheswara Pradana', 'Raka Wicaksana Aryananda', 'Laksana Dewa Pratama',
    'Bimasena Pradipta Anargya', 'Sagara Mahendra Dirgantara'];
    $nilai = [95, 92, 90, 97, 93, 95, 94, 91, 98, 99];
    return view('siswa', compact('nama', 'nilai'));
});

// IF ELSE
// Route untuk menampilkan data mahasiswa
Route::get('/siswa2', function () {
    $nama = ['Aruna Lestari Kirana', 'Nayara Prameswari Cendani', 
    'Selasih Damayanti Ayu', 'Aurora Ayuningtyas Larasati', 'Savira Indah Pradipta',
    'Arka Maheswara Pradana', 'Raka Wicaksana Aryananda', 'Laksana Dewa Pratama',
    'Bimasena Pradipta Anargya', 'Sagara Mahendra Dirgantara'];
    $nilai = [95, 0, 74, 57, 4, 90, 55, 88, 67, 10];
    return view('siswa2', compact('nama', 'nilai'));
});

// SWITCH
Route::get('/switch', function () {
    $nama = ['Aruna Lestari Kirana', 'Nayara Prameswari Cendani', 
    'Selasih Damayanti Ayu', 'Aurora Ayuningtyas Larasati', 'Savira Indah Pradipta',
    'Arka Maheswara Pradana', 'Raka Wicaksana Aryananda', 'Laksana Dewa Pratama',
    'Bimasena Pradipta Anargya', 'Sagara Mahendra Dirgantara'];
    $nilai = [95, 0, 74, 57, 4, 90, 55, 88, 67, 10];
    return view('switch', compact('nama', 'nilai'));
});

// FOR 
Route::get('/for', function () {
    return view('for');
});

//WHILE
// Route Perulangan While untuk siswa
Route::get('/while', function () {
    $nama = [
        'Aruna Lestari Kirana', 'Nayara Prameswari Cendani', 
        'Selasih Damayanti Ayu', 'Aurora Ayuningtyas Larasati', 'Savira Indah Pradipta',
        'Arka Maheswara Pradana', 'Raka Wicaksana Aryananda', 'Laksana Dewa Pratama',
        'Bimasena Pradipta Anargya', 'Sagara Mahendra Dirgantara'
    ];

    $nilai = [95, 0, 74, 57, 4, 90, 55, 88, 67, 10];

    return view('while', compact('nama', 'nilai'));
});

// FOREACH
Route::get('/foreach', function () {
    $nama = 'Aprilia Mutiara Kasih';
    $nilai = [80, 64, 30, 76, 95]; // Bisa diubah atau dikosongkan []

    return view('foreach', compact('nama','nilai'));
});

// FORELSE
Route::get('/forelse', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = [80, 64, 30, 76, 95]; // Bisa dikosongkan untuk tes forelse

    return view('forelse', compact('nama', 'nilai'));
});

// CONTINUE AND BREAK
Route::get('/continue-break', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = [80, 64, 30, 76, 95]; // Array nilai siswa

    return view('continue-break', compact('nama','nilai'));
});

// BARIS KOMENTAR DAN PHP MODE
// Route untuk halaman mahasiswa
Route::get('/komentar', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = [80, 64, 30, 76, 95]; // Array nilai siswa
    return view('komentar', compact('nama','nilai'));
});

// LAYOUT
Route::get('mahasiswa', function () {
$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
"Lisa Permata"];
return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('dosen', function () {
$arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.",
"Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
return view('dosen')->with('dosen', $arrDosen);
});

Route::get('gallery', function () {
return view('gallery');
});


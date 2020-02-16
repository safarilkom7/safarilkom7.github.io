<?php
// File json yang akan dibaca
$file = "json.json";

$kode=$_GET['id'];


// Mendapatkan file json
$dosen = file_get_contents($file);

// Mendecode dosen.json
$data = json_decode($dosen, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Hapus data kedua
    if ($d['id'] == $kode) {
        // Menghapus data array sesuai dengan index
        // Menggantinya dengan elemen baru
        array_splice($data, $key, 1);
    }
}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam dosen.json
$dosen = file_put_contents($file, $jsonfile);

if ($dosen) {
    header("location: ../../");
}
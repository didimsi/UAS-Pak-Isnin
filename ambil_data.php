<?php
header('Content-Type: application/json');

// Konfigurasi Koneksi ke Database BBNI dengan Port 3307
$host = "localhost";
$user = "root";     
$pass = "";         
$db   = "BBNI";
$port = 3307; // <--- Menambahkan port custom

// Menambahkan parameter port di bagian akhir koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    echo json_encode(["error" => "Koneksi database gagal: " . mysqli_connect_error()]);
    exit;
}

// Query mengambil data
$query = "SELECT * FROM nasabah";
$result = mysqli_query($koneksi, $query);

$data_nasabah = [];

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data_nasabah[] = $row;
    }
}

// Mengirimkan data dalam format JSON ke HTML
echo json_encode($data_nasabah);

mysqli_close($koneksi);
?>
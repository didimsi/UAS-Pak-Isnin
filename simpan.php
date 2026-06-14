<?php
// 1. Konfigurasi Koneksi Database
$host = "localhost";
$user = "root";     // Default XAMPP
$pass = "";         // Default XAMPP (kosong)
$db   = "bbni";

$koneksi = mysqli_connect($host, $user, $pass, $db,3307);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// 2. Menangkap data dari form HTML
$idnasabah = $_POST['idnasabah'];
$norek     = $_POST['norek'];
$nmnasabah = $_POST['nmnasabah'];

// 3. Query insert data ke tabel nasabah
$query = "INSERT INTO nasabah (idnasabah, norek, nmnasabah) VALUES ('$idnasabah', '$norek', '$nmnasabah')";

// 4. Eksekusi dan validasi
if (mysqli_query($koneksi, $query)) {
    // Jika sukses, muncul pop-up alert lalu kembali ke index.html
    echo "<script>
            alert('Data Nasabah berhasil disimpan ke database BBNI!');
            window.location.href='index.html';
          </script>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
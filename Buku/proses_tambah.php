<?php
// STEP 2: Hubungkan ke database
include '../koneksi.php';

// STEP 2: Tangkap data dari form
$judul    = $_POST['judul'];
$penulis  = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$stok     = $_POST['stok'];

// STEP 3: Buat query INSERT
$sql = "INSERT INTO buku 
        (judul, penulis, penerbit, stok) 
        VALUES 
        ('$judul', '$penulis', '$penerbit', '$stok')";

// Jalankan query dan cek keberhasilan
if (mysqli_query($conn, $sql)) {
    // Berhasil, kembali ke halaman index
    header("location:../Buku/index.php");
} else {
    // Gagal, tampilkan error
    echo "Error: " . mysqli_error($conn);
}

<?php
include '../koneksi.php';

// Tangkap semua data dari form
$id       = $_POST['id_buku'];
$judul    = $_POST['judul'];
$penulis  = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$stok     = $_POST['stok'];

// Query UPDATE dengan WHERE
$sql = "UPDATE buku SET 
        judul    = '$judul', 
        penulis  = '$penulis', 
        penerbit = '$penerbit', 
        stok     = '$stok' 
        WHERE id_buku = '$id'";

// Jalankan query
if (mysqli_query($conn, $sql)) {
    header("location:../Buku/index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

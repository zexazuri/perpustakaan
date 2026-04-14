<?php
// STEP 1: Hubungkan ke database
include '../koneksi.php';

// STEP 2: Tangkap ID dari URL
$id = $_GET['id'];

// STEP 3: Buat query DELETE
$sql = "DELETE FROM anggota 
        WHERE id_anggota='$id'";

// STEP 4: Eksekusi query
if (mysqli_query($conn, $sql)) {
    // Berhasil, redirect ke index
    header("location:index.php");
} else {
    // Gagal
    echo "Error: " . mysqli_error($conn);
}
?>
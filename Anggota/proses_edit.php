<?php
include '../koneksi.php';

// Tangkap semua data dari form
$id     = $_POST['id_anggota'];
$nama   = $_POST['nama'];
$telp  = $_POST['telp'];
$alamat = $_POST['alamat'];

// Query UPDATE dengan WHERE
$sql = "UPDATE anggota SET 
        nama   = '$nama', 
        telp  = '$telp', 
        alamat = '$alamat' 
        WHERE id_anggota = '$id'";

// Jalankan query
if (mysqli_query($conn, $sql)) {
    header("location:../Anggota/index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
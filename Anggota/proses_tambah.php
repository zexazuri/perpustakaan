<?php
// STEP 2: Hubungkan ke database
include '../koneksi.php';

// STEP 2: Tangkap data dari form
$nama   = $_POST['nama'];
$telp  = $_POST['telp'];
$alamat = $_POST['alamat'];

// STEP 3: Buat query INSERT
$sql = "INSERT INTO anggota 
        (nama, telp, alamat) 
        VALUES 
        ('$nama', '$telp', '$alamat')";

// Jalankan query dan cek keberhasilan
if (mysqli_query($conn, $sql)) {
    // Berhasil, kembali ke halaman index
    header("location:../Anggota/index.php");
} else {
    // Gagal, tampilkan error
    echo "Error: " . mysqli_error($conn);
}
?>
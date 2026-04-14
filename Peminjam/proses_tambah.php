<?php
include '../koneksi.php';

$id_buku     = $_POST['id_buku'];
$id_anggota  = $_POST['id_anggota'];
$tgl_pinjam  = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$sql = "INSERT INTO peminjaman 
        (id_buku, id_anggota, tgl_pinjam, tgl_kembali) 
        VALUES 
        ('$id_buku', '$id_anggota', '$tgl_pinjam', '$tgl_kembali')";

if (mysqli_query($conn, $sql)) {
    header("location:../Peminjam/index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

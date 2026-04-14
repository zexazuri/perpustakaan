<?php
include '../koneksi.php';

$id          = $_POST['id_pinjam'];
$id_buku     = $_POST['id_buku'];
$id_anggota  = $_POST['id_anggota'];
$tgl_pinjam  = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$sql = "UPDATE peminjaman SET 
        id_buku     = '$id_buku', 
        id_anggota  = '$id_anggota', 
        tgl_pinjam  = '$tgl_pinjam', 
        tgl_kembali = '$tgl_kembali' 
        WHERE id_pinjam = '$id'";

if (mysqli_query($conn, $sql)) {
    header("location:../Peminjam/index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

<?php
include '../koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM peminjaman 
        WHERE id_pinjam='$id'";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

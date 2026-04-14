<?php
// STEP 1: Tangkap ID dari URL
include '../koneksi.php';
$id = $_GET['id'];

// STEP 2: Ambil data anggota berdasarkan ID
$query = mysqli_query($conn, 
    "SELECT * FROM anggota WHERE id_anggota='$id'");
$data = mysqli_fetch_array($query);
?>

<!-- STEP 3: Tampilkan form dengan data lama -->
<form action="proses_edit.php" 
      method="POST">
    
    <!-- Kirim ID lewat hidden input -->
    <input type="hidden" 
           name="id_anggota" 
           value="<?= $data['id_anggota'] ?>">
    
    <label>Nama:</label>
    <input type="text" 
           name="nama" 
           value="<?= $data['nama'] ?>">
    <br><br>
    
    <label>Telp:</label>
    <input type="text" 
           name="telp" 
           value="<?= $data['telp'] ?>">
    <br><br>
    
    <label>Alamat:</label>
    <textarea name="alamat"><?= $data['alamat'] ?></textarea>
    <br><br>
    
    <button type="submit">Update</button>
</form>
<?php
// STEP 1: Tangkap ID dari URL
include '../koneksi.php';
$id = $_GET['id'];

// STEP 2: Ambil data berdasarkan ID
$query = mysqli_query(
       $conn,
       "SELECT * FROM buku WHERE id_buku='$id'"
);
$data = mysqli_fetch_array($query);
?>

<!-- STEP 3: Tampilkan form dengan data lama -->
<form action="proses_edit.php"
       method="POST">

       <!-- Kirim ID lewat hidden input -->
       <input type="hidden"
              name="id_buku"
              value="<?= $data['id_buku'] ?>">

       <label>Judul Buku:</label>
       <input type="text"
              name="judul"
              value="<?= $data['judul'] ?>">
       <br><br>

       <label>Penulis:</label>
       <input type="text"
              name="penulis"
              value="<?= $data['penulis'] ?>">
       <br><br>

       <label>Penerbit:</label>
       <input type="text"
              name="penerbit"
              value="<?= $data['penerbit'] ?>">
       <br><br>

       <label>Stok:</label>
       <input type="number"
              name="stok"
              value="<?= $data['stok'] ?>">
       <br><br>

       <button type="submit">Update</button>
</form>
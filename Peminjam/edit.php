<?php
include '../koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_pinjam='$id'");
$data = mysqli_fetch_array($query);

$buku = mysqli_query($conn, "SELECT * FROM buku");
$anggota = mysqli_query($conn, "SELECT * FROM anggota");
?>

<form action="proses_edit.php"
       method="POST">

       <input type="hidden"
              name="id_pinjam"
              value="<?= $data['id_pinjam'] ?>">

       <label>Buku:</label>
       <select name="id_buku"
              required>
              <option value="">-- Pilih Buku --</option>
              <?php while ($b = mysqli_fetch_array($buku)): ?>
                     <option value="<?= $b['id_buku'] ?>" <?= ($b['id_buku'] == $data['id_buku']) ? 'selected' : '' ?>><?= $b['judul'] ?></option>
              <?php endwhile; ?>
       </select>
       <br><br>

       <label>Anggota:</label>
       <select name="id_anggota"
              required>
              <option value="">-- Pilih Anggota --</option>
              <?php while ($a = mysqli_fetch_array($anggota)): ?>
                     <option value="<?= $a['id_anggota'] ?>" <?= ($a['id_anggota'] == $data['id_anggota']) ? 'selected' : '' ?>><?= $a['nama'] ?></option>
              <?php endwhile; ?>
       </select>
       <br><br>

       <label>Tanggal Pinjam:</label>
       <input type="date"
              name="tgl_pinjam"
              value="<?= $data['tgl_pinjam'] ?>"
              required>
       <br><br>

       <label>Tanggal Kembali:</label>
       <input type="date"
              name="tgl_kembali"
              value="<?= $data['tgl_kembali'] ?>"
              required>
       <br><br>

       <button type="submit">Update</button>
</form>
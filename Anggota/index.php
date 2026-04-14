<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM anggota");
?>



<!-- Tombol Tambah Data -->
<a href="tambah.php" 
   class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php while($data = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['telp'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id_anggota'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id_anggota'] ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

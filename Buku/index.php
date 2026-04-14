<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM buku");
?>



<!-- Tombol Tambah Data -->
<a href="tambah.php"
    class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php while ($data = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['penulis'] ?></td>
            <td><?= $data['penerbit'] ?></td>
            <td><?= $data['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_buku'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $data['id_buku'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
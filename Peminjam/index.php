<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT peminjaman.*, buku.judul, anggota.nama FROM peminjaman 
                              LEFT JOIN buku ON peminjaman.id_buku = buku.id_buku
                              LEFT JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota");
?>



<!-- Tombol Tambah Data -->
<a href="tambah.php"
    class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>Buku</th>
        <th>Anggota</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>
    <?php while ($data = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tgl_pinjam'] ?></td>
            <td><?= $data['tgl_kembali'] ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_pinjam'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $data['id_pinjam'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
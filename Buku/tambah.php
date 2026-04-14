<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Buku</title>
</head>

<body>
    <h2>Form Tambah Buku</h2>

    <form action="proses_tambah.php"
        method="POST">

        <label>Judul Buku:</label>
        <input type="text"
            name="judul"
            required>
        <br><br>

        <label>Penulis:</label>
        <input type="text"
            name="penulis"
            required>
        <br><br>

        <label>Penerbit:</label>
        <input type="text"
            name="penerbit"
            required>
        <br><br>

        <label>Stok:</label>
        <input type="number"
            name="stok"
            required>
        <br><br>

        <button type="submit">Tambah</button>
    </form>
</body>

</html>
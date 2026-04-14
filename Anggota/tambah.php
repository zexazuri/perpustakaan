<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title>
</head>
<body>
    <h2>Form Tambah Anggota</h2>
    
    <form action="proses_tambah.php" 
          method="POST">
        
        <label>Nama Anggota:</label>
        <input type="text" 
               name="nama" 
               required>
        <br><br>
        
        <label>Telp:</label>
        <input type="text" 
               name="telp" 
               required>
        <br><br>
        
        <label>Alamat:</label>
        <textarea name="alamat" 
                  required></textarea>
        <br><br>
        
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
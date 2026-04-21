<?php
session_start();

// Cek apakah pengguna belum login
if (!isset($_SESSION['status_login'])) {
    header("Location: login.php");
    exit;
}
?>

<!-- Lanjutkan dengan kode HTML/PHP Anda di bawah -->
<!DOCTYPE html>
<html>
<body>
    <h1>Beranda Perpustakaan</h1>
    <p>Selamat Datang, <strong><?php echo $_SESSION['nama_lengkap']; ?></strong></p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Login Perpustakaan</title>
</head>
<body>
    <h2>Login Admin Perpustakaan</h2>
    <form action="proses_login.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
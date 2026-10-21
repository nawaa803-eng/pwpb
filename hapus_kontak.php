<?php

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>
<body>
    <h2>Hapus Data Kontak</h2>
    <p>Apakah Anda yakin ingin menghapus data kontak ini?</p>
    
    <!-- Jika "Ya", lempar ke proses phapus_kontak.php dengan membawa ID-nya -->
    <a href="phapus_kontak.php?id=<?php echo $id; ?>" style="color: red; font-weight: bold;">Ya, Hapus</a> | 
    <!-- Jika "Batal", kembali ke halaman utama -->
    <a href="tampil_kontak.php">Batal</a>
</body>
</html>

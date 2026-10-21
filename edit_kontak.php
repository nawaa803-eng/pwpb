<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Data Kontak</h2>
    <form action="pedit_kontak.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
        
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        
        <label>Pesan:</label>
        <textarea name="pesan" required><?php echo $row['pesan']; ?></textarea>
        
        <button type="submit" class="btn">Simpan Perubahan</button>
        <a href="tampil_kontak.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>

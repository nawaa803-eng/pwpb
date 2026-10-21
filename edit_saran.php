<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kritik_saran WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Kritik & Saran</title>
</head>
<body>
    <h2>Edit Data Kritik & Saran</h2>
    <form action="pedit_saran.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label>Nama Pengirim:</label><br>
        <input type="text" name="nama_pengirim" value="<?php echo $row['nama_pengirim']; ?>" required>
        <br><br>
        
        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" required>
        <br><br>
        
        <label>Kritik & Saran:</label><br>
        <textarea name="kritik_saran" rows="5" required><?php echo $row['kritik_saran']; ?></textarea>
        <br><br>
        
        <button type="submit">Simpan Perubahan</button>
        <a href="tampil_saran.php">Batal</a>
    </form>
</body>
</html>

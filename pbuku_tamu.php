<?php
include "koneksi.php";

$nama_tamu = $_POST['nama_tamu'];
$asal_instansi = $_POST['asal_instansi'];
$keperluan = $_POST['keperluan'];

$sql = "INSERT INTO buku_tamu (nama_tamu, asal_instansi, keperluan) VALUES ('$nama_tamu', '$asal_instansi', '$keperluan')";
mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Disimpan</title>
</head>
<body>
    <h2>Data Berhasil Disimpan</h2>
    Nama Tamu: <?php echo $nama_tamu; ?><br><br>
    Asal Instansi/Sekolah: <?php echo $asal_instansi; ?><br><br>
    Keperluan Kunjungan: <?php echo $keperluan; ?><br><br>
    <hr>
    <a href="buku_tamu.php">Kembali ke Form</a>
</body>
</html>

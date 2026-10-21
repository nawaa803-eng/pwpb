<?php
include "koneksi.php";

$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$ekstrakurikuler = $_POST['ekstrakurikuler'];

$sql = "INSERT INTO ekstrakurikuler (nama_siswa, kelas, ekstrakurikuler) VALUES ('$nama_siswa', '$kelas', '$ekstrakurikuler')";
mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Disimpan</title>
</head>
<body>
    <h2>Data Berhasil Disimpan</h2>
    Nama Siswa: <?php echo $nama_siswa; ?><br><br>
    Kelas: <?php echo $kelas; ?><br><br>
    Pilihan Ekstrakurikuler: <?php echo $ekstrakurikuler; ?><br><br>
    <hr>
    <a href="ekskul.php">Kembali ke Form</a>
</body>
</html>

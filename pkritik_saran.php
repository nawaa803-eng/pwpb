<?php
include "koneksi.php";

$nama_pengirim = $_POST['nama_pengirim'];
$kelas = $_POST['kelas'];
$kritik_saran = $_POST['kritik_saran'];

$sql = "INSERT INTO kritik_saran (nama_pengirim, kelas, kritik_saran) VALUES ('$nama_pengirim', '$kelas', '$kritik_saran')";
mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Disimpan</title>
</head>
<body>
    <h2>Data Berhasil Disimpan</h2>
    Nama Pengirim: <?php echo $nama_pengirim; ?><br><br>
    Kelas: <?php echo $kelas; ?><br><br>
    Kritik atau Saran: <?php echo $kritik_saran; ?><br><br>
    <hr>
    <a href="kritik_saran.php">Kembali ke Form</a>
</body>
</html>

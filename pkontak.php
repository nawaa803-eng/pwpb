<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Disimpan</title>
</head>
<body>
    <h2>Data Berhasil Disimpan</h2>
    Nama: <?php echo $nama; ?><br><br>
    Email: <?php echo $email; ?><br><br>
    Pesan: <?php echo $pesan; ?><br><br>
    <hr>
    <a href="index.html">Kembali ke Form</a>
</body>
</html>

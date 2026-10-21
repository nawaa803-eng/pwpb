<?php
include "koneksi.php";

$nama_pemesan = $_POST['nama_pemesan'];
$nama_makanan = $_POST['nama_makanan'];
$jumlah_pesanan = $_POST['jumlah_pesanan'];

$sql = "INSERT INTO pemesanan_kantin (nama_pemesan, nama_makanan, jumlah_pesanan) VALUES ('$nama_pemesan', '$nama_makanan', '$jumlah_pesanan')";
mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Disimpan</title>
</head>
<body>
    <h2>Data Berhasil Disimpan</h2>
    Nama Pemesan: <?php echo $nama_pemesan; ?><br><br>
    Nama Makanan: <?php echo $nama_makanan; ?><br><br>
    Jumlah Pesanan: <?php echo $jumlah_pesanan; ?><br><br>
    <hr>
    <a href="pesanan_kantin.php">Kembali ke Form</a>
</body>
</html>

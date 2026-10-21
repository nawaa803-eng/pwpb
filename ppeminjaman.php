<?php
include "koneksi.php";

$nama_peminjam = $_POST['nama_peminjam'];
$judul_buku = $_POST['judul_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];

$sql = "INSERT INTO peminjaman_buku (nama_peminjam, judul_buku, tanggal_peminjaman) VALUES ('$nama_peminjam', '$judul_buku', '$tanggal_peminjaman')";
mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Disimpan</title>
</head>
<body>
    <h2>Data Berhasil Disimpan</h2>
    Nama Peminjam: <?php echo $nama_peminjam; ?><br><br>
    Judul Buku: <?php echo $judul_buku; ?><br><br>
    Tanggal Peminjaman: <?php echo $tanggal_peminjaman; ?><br><br>
    <hr>
    <a href="peminjaman.php">Kembali ke Form</a>
</body>
</html>

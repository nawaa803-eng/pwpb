<?php
include "koneksi.php";

$id = $_POST['id'];
$nama_pengirim = $_POST['nama_pengirim'];
$kelas = $_POST['kelas'];
$kritik_saran = $_POST['kritik_saran'];

$sql = "UPDATE kritik_saran SET nama_pengirim='$nama_pengirim', kelas='$kelas', kritik_saran='$kritik_saran' WHERE id='$id'";
mysqli_query($koneksi, $sql);

header("Location: tampil_saran.php");
exit();
?>

<?php

include "koneksi.php";


$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];


$sql = "UPDATE kontak SET nama='$nama', email='$email', pesan='$pesan' WHERE id='$id'";
mysqli_query($koneksi, $sql);


header("Location: tampil_kontak.php");
exit();
?>

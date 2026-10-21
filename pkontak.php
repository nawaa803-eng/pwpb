<?php

include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama,email,pesan)
        VALUES ('$nama','$email','$pesan')";

mysqli_query($koneksi, $sql);

header("Location:tampil_kontak.php");
exit();

?>
<?php
include "koneksi.php";


$id = $_GET['id'];


$sql = "DELETE FROM kontak WHERE id='$id'";
mysqli_query($koneksi, $sql);


header("Location: tampil_kontak.php");
exit();
?>

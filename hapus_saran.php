<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM kritik_saran WHERE id='$id'";
mysqli_query($koneksi, $sql);

header("Location: tampil_saran.php");
exit();
?>

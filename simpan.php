<?php

include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, email, pesan)
        VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan!";
    echo "<br><a href='index.php'>Kembali</a>";
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}

?>
<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_tamu = $_POST['nama_tamu'];
    $asal_instansi = $_POST['asal_instansi'];
    $keperluan = $_POST['keperluan'];

    $sql = "INSERT INTO buku_tamu (nama_tamu, asal_instansi, keperluan) VALUES ('$nama_tamu', '$asal_instansi', '$keperluan')";
    mysqli_query($koneksi, $sql);
    header("Location: buku_tamu.php");
    exit();
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM buku_tamu WHERE id='$id'");
    header("Location: buku_tamu.php");
    exit();
}

$data = mysqli_query($koneksi, "SELECT * FROM buku_tamu");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Form Buku Tamu Sekolah</h2>
    <form method="POST">
        Nama Tamu : <input type="text" name="nama_tamu" required><br><br>
        Asal Instansi : <input type="text" name="asal_instansi" required><br><br>
        Keperluan : <input type="text" name="keperluan" required><br><br>
        <button type="submit">Simpan</button>
    </form>

    <hr>

    <h2>Daftar Buku Tamu</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Tamu</th>
            <th>Asal Instansi</th>
            <th>Keperluan</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_tamu']; ?></td>
            <td><?php echo $row['asal_instansi']; ?></td>
            <td><?php echo $row['keperluan']; ?></td>
            <td><a href="buku_tamu.php?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

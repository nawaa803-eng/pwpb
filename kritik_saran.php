<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pengirim = $_POST['nama_pengirim'];
    $kelas = $_POST['kelas'];
    $kritik_saran = $_POST['kritik_saran'];

    $sql = "INSERT INTO kritik_saran (nama_pengirim, kelas, kritik_saran) VALUES ('$nama_pengirim', '$kelas', '$kritik_saran')";
    mysqli_query($koneksi, $sql);
    header("Location: kritik_saran.php");
    exit();
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM kritik_saran WHERE id='$id'");
    header("Location: kritik_saran.php");
    exit();
}

$data = mysqli_query($koneksi, "SELECT * FROM kritik_saran");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kritik & Saran</title>
</head>
<body>
    <h2>Form Kritik dan Saran</h2>
    <form method="POST">
        Nama Pengirim : <input type="text" name="nama_pengirim" required><br><br>
        Kelas : <input type="text" name="kelas" required><br><br>
        Kritik atau Saran : <textarea name="kritik_saran" required></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>

    <hr>

    <h2>Daftar Kritik dan Saran</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Kelas</th>
            <th>Kritik / Saran</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_pengirim']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
            <td><?php echo $row['kritik_saran']; ?></td>
            <td><a href="kritik_saran.php?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $ekstrakurikuler = $_POST['ekstrakurikuler'];

    $sql = "INSERT INTO ekstrakurikuler (nama_siswa, kelas, ekstrakurikuler) VALUES ('$nama_siswa', '$kelas', '$ekstrakurikuler')";
    mysqli_query($koneksi, $sql);
    header("Location: eksul.php");
    exit();
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM ekstrakurikuler WHERE id='$id'");
    header("Location: eksul.php");
    exit();
}

$data = mysqli_query($koneksi, "SELECT * FROM ekstrakurikuler");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Ekskul</title>
</head>
<body>
    <h2>Form Pendaftaran Ekstrakurikuler</h2>
    <form method="POST">
        Nama Siswa : <input type="text" name="nama_siswa" required><br><br>
        Kelas : <input type="text" name="kelas" required><br><br>
        Pilihan Ekstrakurikuler : <input type="text" name="ekstrakurikuler" required><br><br>
        <button type="submit">Daftar</button>
    </form>

    <hr>

    <h2>Daftar Peserta Ekstrakurikuler</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Ekstrakurikuler</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_siswa']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
            <td><?php echo $row['ekstrakurikuler']; ?></td>
            <td><a href="eksul.php?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

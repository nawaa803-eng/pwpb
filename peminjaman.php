<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_peminjam = $_POST['nama_peminjam'];
    $judul_buku = $_POST['judul_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];

    $sql = "INSERT INTO peminjaman_buku (nama_peminjam, judul_buku, tanggal_peminjaman) VALUES ('$nama_peminjam', '$judul_buku', '$tanggal_peminjaman')";
    mysqli_query($koneksi, $sql);
    header("Location: peminjaman.php");
    exit();
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM peminjaman_buku WHERE id='$id'");
    header("Location: peminjaman.php");
    exit();
}

$data = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Buku</title>
</head>
<body>
    <h2>Form Peminjaman Buku</h2>
    <form method="POST">
        Nama Peminjam : <input type="text" name="nama_peminjam" required><br><br>
        Judul Buku : <input type="text" name="judul_buku" required><br><br>
        Tanggal Peminjaman : <input type="date" name="tanggal_peminjaman" required><br><br>
        <button type="submit">Pinjam</button>
    </form>

    <hr>

    <h2>Daftar Peminjaman Buku</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_peminjam']; ?></td>
            <td><?php echo $row['judul_buku']; ?></td>
            <td><?php echo $row['tanggal_peminjaman']; ?></td>
            <td><a href="peminjaman.php?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

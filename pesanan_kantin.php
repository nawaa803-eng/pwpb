<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemesan = $_POST['nama_pemesan'];
    $nama_makanan = $_POST['nama_makanan'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];

    $sql = "INSERT INTO pemesanan_kantin (nama_pemesan, nama_makanan, jumlah_pesanan) VALUES ('$nama_pemesan', '$nama_makanan', '$jumlah_pesanan')";
    mysqli_query($koneksi, $sql);
    header("Location: pesanan_kantin.php");
    exit();
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM pemesanan_kantin WHERE id='$id'");
    header("Location: pesanan_kantin.php");
    exit();
}

$data = mysqli_query($koneksi, "SELECT * FROM pemesanan_kantin");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Kantin</title>
</head>
<body>
    <h2>Form Pemesanan Kantin Sekolah</h2>
    <form method="POST">
        Nama Pemesan : <input type="text" name="nama_pemesan" required><br><br>
        Nama Makanan : <input type="text" name="nama_makanan" required><br><br>
        Jumlah Pesanan : <input type="number" name="jumlah_pesanan" required><br><br>
        <button type="submit">Pesan</button>
    </form>

    <hr>

    <h2>Daftar Pesanan Kantin</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nama Makanan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_pemesan']; ?></td>
            <td><?php echo $row['nama_makanan']; ?></td>
            <td><?php echo $row['jumlah_pesanan']; ?></td>
            <td><a href="pesanan_kantin.php?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

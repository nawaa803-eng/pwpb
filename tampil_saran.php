<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kritik & Saran</title>
</head>
<body>
    <h2>Daftar Kritik dan Saran Sekolah</h2>
    <a href="tambah_saran.php">Tambah Saran Baru</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kritik / Saran</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM kritik_saran");
        while($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['kritik_saran']; ?></td>
            <td>
                <a href="edit_saran.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                <a href="hapus_saran.php?id=<?php echo $row['id']; ?>" style="color:red;">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman Buku</title>
</head>
<body>
    <h2>Form Peminjaman Buku</h2>
    <form action="ppeminjaman.php" method="POST">
        Nama Peminjam: <input type="text" name="nama_peminjam" required><br><br>
        Judul Buku: <input type="text" name="judul_buku" required><br><br>
        Tanggal Peminjaman: <input type="date" name="tanggal_peminjaman" required><br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

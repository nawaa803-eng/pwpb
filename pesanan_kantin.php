<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Kantin Sekolah</title>
</head>
<body>
    <h2>Form Pemesanan Kantin Sekolah</h2>
    <form action="ppesanan_kantin.php" method="POST">
        Nama Pemesan: <input type="text" name="nama_pemesan" required><br><br>
        Nama Makanan: <input type="text" name="nama_makanan" required><br><br>
        Jumlah Pesanan: <input type="number" name="jumlah_pesanan" required><br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

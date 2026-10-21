<!DOCTYPE html>
<html>
<head>
    <title>Form Kritik dan Saran</title>
</head>
<body>
    <h2>Form Kritik dan Saran</h2>
    <form action="pkritik_saran.php" method="POST">
        Nama Pengirim: <input type="text" name="nama_pengirim" required><br><br>
        Kelas: <input type="text" name="kelas" required><br><br>
        Kritik atau Saran: <textarea name="kritik_saran" required></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

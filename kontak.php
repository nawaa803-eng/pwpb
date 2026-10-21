<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak Sekolah</title>
</head>
<body>

<h2>Hubungi Kami</h2>

<form action="pkontak.php" method="POST">

    Nama :
    <input type="text" name="nama" required>
    <br><br>

    Email :
    <input type="email" name="email" required>
    <br><br>

    Pesan :
    <textarea name="pesan" required></textarea>
    <br><br>

    <button type="submit">Kirim</button>

</form>

</body>
</html>
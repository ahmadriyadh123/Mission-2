<!DOCTYPE html>
<html>
<head>
    <title>Form Input Nama</title>
</head>
<body>
    <h2>Masukkan Nama Anda</h2>
    <form method="post" action="">
        <label >Nama:</label>
        <input type="text" name="nama" required>
        
        <!-- Tombol kirim dengan metode GET -->
        <button type="submit" formaction="display2.php" formmethod="post">Kirim (POST)</button>

        <!-- Tombol kirim dengan metode POST -->
        <button type="submit" formaction="display2.php" formmethod="post">Kirim (GET)</button>
    </form>
</body>
</html>
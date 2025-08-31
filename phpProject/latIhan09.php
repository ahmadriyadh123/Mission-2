<?php
$nama = null;
$method = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $method = "POST";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    $method = "GET";
} else {
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
 </head>

<body>
    <h1>Form Input Nama</h1>
    
    <form action="latihan09.php" method="POST">
        <label for="nama_post">Nama (POST):</label>
        <input type="text" id="nama_post" name="nama">
        <button type="submit">Kirim POST</button>
    </form>

    <br>

    <form action="latihan09.php" method="GET">
        <label for="nama_get">Nama (GET):</label>
        <input type="text" id="nama_get" name="nama">
        <button type="submit">Kirim GET</button>
    </form>

    <?php if ($nama): ?>
        <h2>Halo, <?= $nama ?>! (dikirim via <?= $method ?>)</h2>
    <?php else: ?>
        <p>Tidak ada data yang dikirim.</p>
    <?php endif; ?>
</body>
</html>
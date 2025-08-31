<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/style.css"> 
</head>
<body>
    <div class="container">
    <h1><?= htmlspecialchars($title) ?></h1>

    <form action="<?= BASE_URL ?>/mahasiswa/update/<?= htmlspecialchars($mahasiswa['id']) ?>" method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="<?= htmlspecialchars($mahasiswa['nim']) ?>" required>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($mahasiswa['nama']) ?>" required>

        <label for="umur">Umur</label>
        <input type="number" name="umur" id="umur" value="<?= htmlspecialchars($mahasiswa['umur']) ?>" required>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="<?= BASE_URL ?>/mahasiswa">Batal</a>
    </div>
</body>
</html>
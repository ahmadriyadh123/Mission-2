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
    
    <ul>
        <li><strong>NIM:</strong> <?= htmlspecialchars($mahasiswa['nim']) ?></li>
        <li><strong>Nama:</strong> <?= htmlspecialchars($mahasiswa['nama']) ?></li>
        <li><strong>Umur:</strong> <?= htmlspecialchars($mahasiswa['umur']) ?></li>
    </ul>

    <br>
    <a href="<?= BASE_URL ?>/mahasiswa">Kembali</a>
    </div>
</body>
</html>
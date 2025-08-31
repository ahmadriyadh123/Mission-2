<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        * { text-align: center; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px;}
    </style>
    <title><?= esc($title) ?></title>
</head>
<body>
    <h1><?= esc($title) ?></h1>
    
    <ul>
        <li><strong>NIM:</strong> <?= esc($mahasiswa['nim']) ?></li>
        <li><strong>Nama:</strong> <?= esc($mahasiswa['nama']) ?></li>
        <li><strong>Umur:</strong> <?= esc($mahasiswa['umur']) ?></li>
    </ul>

    <br>
    <a href="<?= site_url('mahasiswa') ?>">Kembali</a>
</body>
</html>
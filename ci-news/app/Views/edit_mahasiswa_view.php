<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <style>
        h1 { text-align: center; }
        form { max-width: 500px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; }
        label, input { display: block; margin-bottom: 10px; width: 100%; }
        button { display: block; margin: 20px auto 0 auto; }
        a { text-align: center; display: block; text-decoration: none; }
    </style>
</head>
<body>
    <h1><?= esc($title) ?></h1>

    <form action="<?= site_url('mahasiswa/update/' . $mahasiswa['id']) ?>" method="post">
        <?= csrf_field() ?>

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="<?= esc($mahasiswa['nim']) ?>" required>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= esc($mahasiswa['nama']) ?>" required>

        <label for="umur">Umur</label>
        <input type="text" name="umur" id="umur" value="<?= esc($mahasiswa['umur']) ?>">

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="<?= site_url('mahasiswa') ?>">Batal</a>

</body>
</html>
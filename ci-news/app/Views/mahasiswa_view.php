<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <style>
        h1 { text-align: center; }
        table { margin: auto;width: 30%; border-collapse: collapse; text-align: center; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px;}
        .action-links a { margin-right: 10px; text-decoration: none; }
        form { display: flex; justify-content: center; }
        .create { display: block; text-align: center; margin: 20px 0; text-decoration: none; }
    </style>
</head>
<body>
    <h1><?= esc($title) ?></h1>
    <div>
        <form action="<?= site_url('mahasiswa') ?>" method="get">
            <input type="text" name="keyword" placeholder="Cari NIM, Nama, atau Umur...">
            <button type="submit">Cari</button>
        </form>
    </div>
    <a class="create" href="<?= site_url('/mahasiswa/create') ?>">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= esc($mhs['nim']) ?></td>
                    <td><?= esc($mhs['nama']) ?></td>
                    <td><?= esc($mhs['umur']) ?></td>
                    <td class="action-links">
                        <a href="<?= site_url('mahasiswa/' . $mhs['id']) ?>">Detail</a>
                        <a href="<?= site_url('mahasiswa/edit/' . $mhs['id']) ?>">Edit</a>
                        <a href="<?= site_url('mahasiswa/delete/' . $mhs['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
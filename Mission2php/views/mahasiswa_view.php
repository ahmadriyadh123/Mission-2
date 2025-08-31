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
    <div class="search-form">
        <form action="<?= BASE_URL ?>/mahasiswa" method="get">
            <input type="text" name="keyword" placeholder="Cari NIM, Nama, atau Umur..." value="<?= htmlspecialchars($keyword ?? '') ?>">
            <button type="submit">Cari</button>
        </form>
    </div>
    <a href="<?= BASE_URL ?>/mahasiswa/create" class="button">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th class="th-actions">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= htmlspecialchars($mhs['nim']) ?></td>
                    <td><?= htmlspecialchars($mhs['nama']) ?></td>
                    <td><?= htmlspecialchars($mhs['umur']) ?></td>
                    <td class="action-links">
                        <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= htmlspecialchars($mhs['id']) ?>" class="button">Detail</a>
                        <a href="<?= BASE_URL ?>/mahasiswa/edit/<?= htmlspecialchars($mhs['id']) ?>" class="button">Edit</a>
                        <a href="<?= BASE_URL ?>/mahasiswa/delete/<?= htmlspecialchars($mhs['id']) ?>" class="button button-danger">Hapus</a>

                    </td>                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>
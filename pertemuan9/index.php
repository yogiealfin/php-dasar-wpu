<?php
require 'functions.php';
$games = query("SELECT * FROM games");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Games</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Cover</th>
            <th>Nama</th>
            <th>Developer</th>
            <th>Publisher</th>
            <th>Genre</th>
            <th>Platform</th>
            <th>Tahun Release</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($games as $game) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="images/<?= $game["cover"]; ?>" alt="" width="50"></td>
                <td><?= $game["name"]; ?></td>
                <td><?= $game["developer"]; ?></td>
                <td><?= $game["publisher"]; ?></td>
                <td><?= $game["genre"]; ?></td>
                <td><?= $game["platform"]; ?></td>
                <td><?= $game["release_date"]; ?></td>
                <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
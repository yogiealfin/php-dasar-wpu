<?php
require_once("../functions.php");
$keyword = $_GET["keyword"];
$query = "SELECT * FROM games WHERE 
name LIKE '%$keyword%' OR 
developer LIKE '%$keyword%' OR 
publisher LIKE '%$keyword%' OR 
genre LIKE '%$keyword%' OR 
platform LIKE '%$keyword%'";
$games = query($query);
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Cover</th>
        <th>Judul Game</th>
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
            <td><a href="ubah.php?id=<?= $game['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $game['id']; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
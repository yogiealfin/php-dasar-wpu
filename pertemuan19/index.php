<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';
$games = query("SELECT * FROM games");

// Tombol cari diclick
if (isset($_POST["cari"])) {
    $games = cari($_POST["keyword"]);
}
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
    <a href="tambah.php">Tambah Data</a>
    <button><a href="logout.php">Logout</a></button>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    </form>
    <br>
    <div id="table">
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
    </div>
    <script src="js/script.js"></script>
</body>

</html>
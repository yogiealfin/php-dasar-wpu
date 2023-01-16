<?php
require "functions.php";

// ambil data pada url
$id = $_GET["id"];
// query data games berdasarkan id
$game = query("SELECT * FROM games WHERE id = $id")[0];
// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek adakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah!');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah!');
        document.location.href='index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Games</title>
</head>

<body>
    <h1>Ubah Data Games</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $game["id"]; ?>">
        <ul>
            <li>
                <label for="name">Judul Game : </label>
                <input type="text" name="name" id="name" required value="<?= $game["name"]; ?>">
            </li>
            <li>
                <label for=" developer">Developer : </label>
                <input type="text" name="developer" id="developer" required value="<?= $game["developer"]; ?>">
            </li>
            <li>
                <label for="publisher">Publisher : </label>
                <input type="text" name="publisher" id="publisher" required value="<?= $game["publisher"]; ?>">
            </li>
            <li>
                <label for=" genre">Genre : </label>
                <input type="text" name="genre" id="genre" required value="<?= $game["genre"]; ?>">
            </li>
            <li>
                <label for=" platform">Platform : </label>
                <input type="text" name="platform" id="platform" required value="<?= $game["platform"]; ?>">
            </li>
            <li>
                <label for=" release_date">Tahun Release : </label>
                <input type="date" name="release_date" id="release_date" required value="<?= $game["release_date"]; ?>">
            </li>
            <li>
                <label for=" cover">Cover : </label>
                <input type="text" name="cover" id="cover" required value="<?= $game["cover"]; ?>">
            </li>
            <li>
                <button type=" submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>
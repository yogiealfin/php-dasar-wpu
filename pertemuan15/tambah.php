<?php
require "functions.php";
// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek adakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambakan!');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambakan!');
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
    <title>Tambah Data Games</title>
</head>

<body>
    <h1>Tambah Data Games</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="name">Judul Game : </label>
                <input type="text" name="name" id="name" required>
            </li>
            <li>
                <label for="developer">Developer : </label>
                <input type="text" name="developer" id="developer" required>
            </li>
            <li>
                <label for="publisher">Publisher : </label>
                <input type="text" name="publisher" id="publisher" required>
            </li>
            <li>
                <label for="genre">Genre : </label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="platform">Platform : </label>
                <input type="text" name="platform" id="platform" required>
            </li>
            <li>
                <label for="release_date">Tahun Release : </label>
                <input type="date" name="release_date" id="release_date" required>
            </li>
            <li>
                <label for="cover">Cover : </label>
                <input type="file" name="cover" id="cover" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>
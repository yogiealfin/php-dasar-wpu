<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["gambar"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"])
) {
    header("Location: latihan2.php");   //redirect
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li><img src="images/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>

</html>
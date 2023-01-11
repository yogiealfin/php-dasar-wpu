<?php
$mahasiswa = [
    ["Yogie Alfin Salim", "10117100", "Teknik Informatika", "yogiealfin23@gmail.com"],
    ["Auliya Haunan Fauziyyah", "20117100", "Ilmu Olahraga", "auliyahaunan28@gmail.com"],
    ["Veronica", "30117100", "Administrasi Negara", "veronica18@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mashasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
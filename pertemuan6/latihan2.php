<?php
// $mahasiswa = [
//     ["Yogie Alfin Salim", "10117100", "Teknik Informatika", "yogiealfin23@gmail.com"],
//     ["Auliya Haunan Fauziyyah", "20117100", "Ilmu Olahraga", "auliyahaunan28@gmail.com"],
//     ["Veronica", "30117100", "Administrasi Negara", "veronica18@gmail.com"]
// ];

// Array Associative => key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "gambar" => "auliya.jpg",
        "nama" => "Yogie Alfin Salim",
        "nim" => "10117100",
        "jurusan" => "Teknik Informatika",
        "email" => "yogiealfin23@gmail.com"
    ],
    [
        "gambar" => "yogie.jpg",
        "nama" => "Auliya Haunan Fauziyyah",
        "nim" => "20117100",
        "jurusan" => "Ilmu Olahraga",
        "email" => "auliyahaunan28@gmail.com"
    ]
];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="images/<?= $mhs["gambar"]; ?>" alt="Foto Mahasiswa"></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
<?php
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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><a href="latihan3.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");

// Ambil data dari table games / query
$result = mysqli_query($conn, "SELECT * FROM games");

// Ambil data dari object result / fetch
// mysqli_fetch_row() => mengembalikan array numerik
// mysqli_fetch_assoc() => mengembalikan array associative
// mysqli_fetch_array() => mengembalikan array kedua jenis array => kekurangannya pengembalian data double karna array assoc dan numerik
// mysqli_fetch_object() => mengembalikan object (Sangat jarang digunakan)

// while ($games = mysqli_fetch_assoc($result)) {
//     var_dump($games["name"]); // => row, assoc menggunakan cara ini untuk menunjuk column
// };

// $games = mysqli_fetch_object($result);
// var_dump($games->name); => object menggunakan cara ini untuk menunjuk column


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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="images/<?= $row["cover"]; ?>" alt="" width="50"></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["developer"]; ?></td>
                <td><?= $row["publisher"]; ?></td>
                <td><?= $row["genre"]; ?></td>
                <td><?= $row["platform"]; ?></td>
                <td><?= $row["release_date"]; ?></td>
                <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>
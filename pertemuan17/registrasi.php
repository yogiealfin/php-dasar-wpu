<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>alert('user baru berhasil ditambahkan');</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }

        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="konfirmasi">Konfirmasi Password</label>
                <input type="password" name="konfirmasi" id="konfirmasi">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Register</button>
            </li>
        </ul>
    </form>
</body>

</html>
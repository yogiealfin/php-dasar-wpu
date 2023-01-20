<?php
session_start();
require "functions.php";

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}


if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit;
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user where username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // set session
            $_SESSION['login'] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                setcookie('id', $row['id'], time() + 360);
                setcookie('key', hash('sha256', $row['username']), time() + 360);
            }
            header('Location: index.php');
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .block {
            display: block;
        }

        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <?php if (isset($error)) {
        echo "<script>alert('username/password salah!');</script>";
    }
    ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username" class="block">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password" class="block">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <br>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>
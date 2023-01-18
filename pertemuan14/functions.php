<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    // ambil data dari tiap element dalam form
    $name = htmlspecialchars($data["name"]);
    $developer = htmlspecialchars($data["developer"]);
    $publisher = htmlspecialchars($data["publisher"]);
    $genre = htmlspecialchars($data["genre"]);
    $platform = htmlspecialchars($data["platform"]);
    $release_date = htmlspecialchars($data["release_date"]);

    // Upload files
    $cover = upload();
    if (!$cover) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO games VALUES 
    (NULL,'$name', '$developer', '$publisher','$genre', '$platform', '$release_date', '$cover')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['cover']['name'];
    $ukuranFile = $_FILES['cover']['size'];
    $error = $_FILES['cover']['error'];
    $tmpName = $_FILES['cover']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Upload gambar terlebih dahulu!');</script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    //explode memecah nama file menjadi array dengan memasang delimiter pada parameter pertama
    $ekstensiGambar = explode('.', $namaFile);
    // end mengambil data paling akhir pada array
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // in_array mengecek adakah sebuah string didalam sebuah array
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Jenis file yang diupload tidak valid!');</script>";
        return false;
    }

    // Cek jika ukuran file terlalu besar
    if ($ukuranFile > 2097152) {
        echo "<script>alert('Ukuran file terlalu besar!');</script>";
        return false;
    }

    // generate nama file baru untuk mencegah nama duplikat dan menimpa file di directory
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // Lolos semua pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'images/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM games WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    // ambil data dari tiap element dalam form
    $id = $data["id"];
    $name = htmlspecialchars($data["name"]);
    $developer = htmlspecialchars($data["developer"]);
    $publisher = htmlspecialchars($data["publisher"]);
    $genre = htmlspecialchars($data["genre"]);
    $platform = htmlspecialchars($data["platform"]);
    $release_date = htmlspecialchars($data["release_date"]);
    $coverLama = htmlspecialchars($data["coverLama"]);

    // cek apakah user memilih cover baru atau tidak
    if ($_FILES['cover']['error'] === 4) {
        $cover = $coverLama;
    } else {
        $cover = upload();
    }

    $cover = htmlspecialchars($data["cover"]);

    // query insert data
    $query = "UPDATE games SET
                name = '$name', 
                developer = '$developer', 
                publisher = '$publisher', 
                genre = '$genre', 
                platform = '$platform', 
                release_date = '$release_date',
                cover = '$cover'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM games WHERE 
    name LIKE '%$keyword%' OR 
    developer LIKE '%$keyword%' OR 
    publisher LIKE '%$keyword%' OR 
    genre LIKE '%$keyword%' OR 
    platform LIKE '%$keyword%'";
    return query($query);
}

function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $konfirmasi = mysqli_real_escape_string($conn, $data["konfirmasi"]);

    // cek username sudah ada didatabase atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username === '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username yang dipilih sudah terdaftar');</script>";
        return false;
    }
    // cek konfirmasi password
    if ($password !== $konfirmasi) {
        echo "<script>alert('konfirmasi password tidak sesuai!');</script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES (NULL,'$username','$password')");
    return mysqli_affected_rows($conn);
}

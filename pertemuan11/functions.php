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
    $cover = htmlspecialchars($data["cover"]);

    // query insert data
    $query = "INSERT INTO games VALUES 
    (NULL,'$name', '$developer', '$publisher','$genre', '$platform', '$release_date', '$cover')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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

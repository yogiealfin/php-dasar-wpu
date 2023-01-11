<?php

// Array => Variable yang dapat menampung banyak nilai, pasangan antara key (index yang bermulai dari 0) dan value
// Cara membuat array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
$bulan = ["Januari", "Februari", "Maret"];

// Elemen rray boleh memilik tipe data yang berbeda 
$arr1 = [123, "Januari", false];

// Menampilkan Array => var_dump(), print_r()
// var_dump($hari);
// echo "<br>";
// print_r($hari);
// echo "<br>";

// Menampilkan 1 element pada array
// echo $hari[0];

// Menambahkan elemen baru pada array
var_dump($bulan);
$bulan[] = "April";
echo "<br>";
var_dump($bulan);

<?php

// Built in function yang akan sering digunakan

// Date => Menampilkan tanggal sesuai format yang digunakan didalam parameter
// echo date('l, d-F-Y');

// Time => Menampilkan waktu UNIX Timestamp / EPOCH Time (Detik yang sudah berlalu sejak 1 Januari 1970) 
// echo time();

// Menampilkan hari dalam x-hari kedepan atau kebelakang dengan menggabungkan 2 function
// echo date("l, d-F-Y", time() + 60 * 60 * 24 * 2);

// mktime => Membuat sendiri detiknya, tidak berpatok pada EPOCH Time
// mktime(jam, menit, detik, bulan, tanggal, tahun)
// Menampilkan hari sesuai tanggal yang dimasukkan
// echo date("l", mktime(0, 0, 0, 4, 23, 1999));

// strtotime => memasukkan format tanggal, keluar detiknya
// echo date("l", strtotime("23 Apr 1999"));

// Function yang akan sering digunakan
// String 
// strlen() => menghitung panjang sebuah string
// strcmp() => membandingkan 2 buah string
// explode() => memecah string menjadi array (untuk mengambil sebuah file extensi tertentu)
// htmlspecialchars => function sederhana khusus menjaga website dari hacker

// Utility
// var_dump() => mencetak isi dari sebuah variable, array, object
// isset() => mengecek apakah variable sudah pernah dibikin atau belum
// empty() => mengecek isi variable sudah terisi atau kosong
// die() => memberhentikan program, setelah function baris program kebawah tak akan dieksekusi
// sleep() => untuk memberhentikan program sementara

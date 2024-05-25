<?php

// 1. Koneksi ke database webitats (di file function)
// urutannya nama host,username,password

// membuat function query untuk mengambil data mahasiwa
$conn = mysqli_connect("localhost", "root", "", "project1wedding");
// lalu dikirimkan ke home
function query($query)
{
    // tambahkan global agar di kenal
    global $conn;
    // buat koneksi dengan urutan coneksi dan query
    $result = mysqli_query($conn, $query);
    // buat array kosong untuk menampung
    $rows = [];
    // ambil data table mahasiswa dengan erulangan
    while ($row = mysqli_fetch_assoc($result)) {
        // masukkan ke variabel rows
        $rows[] = $row;
    }
    // dan kemmbalikan isimya ke home.php
    return $rows;
}

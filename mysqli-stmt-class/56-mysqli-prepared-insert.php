<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

// Buat format tanggal hari ini
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $sekarang->format("Y-m-d H:i:s");

// Buat prepared statement untuk input data barang
$stmt = $mysqli->prepare("INSERT INTO barang (nama_barang,
 jumlah_barang, harga_barang, tanggal_update) VALUES (?,?,?,?)");

// Proses bind
$stmt->bind_param(
    "siis",
    $nama_barang,
    $jumlah_barang,
    $harga_barang,
    $tanggal_update
);

$nama_barang = "Sharp Microwave Oven R-728(K)";
$jumlah_barang = 20;
$harga_barang = 1250500;
$tanggal_update = $timestamp;

// Proses execute
$stmt->execute();
echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br>";

$stmt->close();

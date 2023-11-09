<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

// Buat prepared statement untuk ambil data barang
$stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang <= ?");

// Proses bind
$stmt->bind_param("i", $id_barang);
$id_barang = 3;

// Proses execute
$stmt->execute();

// Proses menampilkan hasil query
$stmt->bind_result(
    $id_barang,
    $nama_barang,
    $jumlah_barang,
    $harga_barang,
    $tanggal_update
);

while ($stmt->fetch()) {
    echo $id_barang;
    echo " | ";
    echo $nama_barang;
    echo " | ";
    echo $jumlah_barang;
    echo " | ";
    echo $harga_barang;
    echo " | ";
    echo $tanggal_update;
    echo "<br>";
}

$stmt->free_result();
$stmt->close();

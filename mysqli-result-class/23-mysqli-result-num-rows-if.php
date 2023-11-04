<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

// tampilkan data
$query = "SELECT * FROM barang WHERE id_barang = 100";
$result = $mysqli->query($query);

if($result->num_rows === 0) {
    echo "Data tidak ditemukan";
} else {
    echo "Data tersedia";
}

$result->free();
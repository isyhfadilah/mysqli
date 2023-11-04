<?php
// associative array
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

while($row = $result->fetch_assoc()) {
    echo $row['id_barang'] . " | ";
    echo $row['nama_barang'] . " | ";
    echo $row['jumlah_barang'] . " | ";
    echo $row['harga_barang'] . " | ";
    echo $row['tanggal_update'];
    echo "<br>";
}

$result->free();
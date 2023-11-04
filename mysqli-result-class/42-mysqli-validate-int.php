<?php
$mysqli = new mysqli('localhost', 'root', '', 'ilkoom');

$query = "SELECT * from barang where id_barang = 17";
$result = $mysqli->query($query);

while($row = $result->fetch_assoc()) {
    echo $row['id_barang'] . ' | ';
    echo $row['nama_barang'] . ' | ';
    echo $row['jumlah_barang'] . ' | ';
    echo $row['harga_barang'] . ' | ';
    echo $row['tanggal_update'];
}

$result->free();
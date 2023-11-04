<?php
$_GET['id_barang'] = 2;
$id_barang = $_GET['id_barang'];

$mysqli = new mysqli('localhost', 'root', '', 'ilkoom');

$query = "SELECT * from barang where id_barang = $id_barang";
$result = $mysqli->query($query);

while($row = $result->fetch_assoc()) {
    echo $row['id_barang'] . ' | ';
    echo $row['nama_barang'] . ' | ';
    echo $row['jumlah_barang'] . ' | ';
    echo $row['harga_barang'] . ' | ';
    echo $row['tanggal_update'] . '<br>';
}

$result->free();

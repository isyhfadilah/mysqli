<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

$i = 0;
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $arr[$i]['id_barang'] = $row['id_barang'];
    $arr[$i]['nama_barang'] = $row['nama_barang'];
    $arr[$i]['jumlah_barang'] = $row['jumlah_barang'];
    $arr[$i]['harga_barang'] = $row['harga_barang'];
    $arr[$i]['tanggal_update'] = $row['tanggal_update'];
    $i++;
}

$result->free();

echo "<pre>";
print_r ($arr);
echo "</pre>";
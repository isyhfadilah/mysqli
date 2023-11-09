<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang = ?");
$stmt->bind_param("i", $id_barang);
$id_barang = 2;

$stmt->execute();

$stmt->bind_result($id_barang, $nama_barang, $jumlah_barang, $harga_barang, $tanggal_update);
$stmt->fetch();

echo $id_barang . " | ";
echo $nama_barang . " | ";
echo $jumlah_barang . " | ";
echo $harga_barang . " | ";
echo $tanggal_update;	
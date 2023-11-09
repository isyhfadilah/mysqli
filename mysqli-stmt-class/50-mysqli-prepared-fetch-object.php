<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$stmt = $mysqli->prepare("SELECT * from barang where id_barang = ?");
$stmt->bind_param("i", $id_barang);
$id_barang = 1;
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_object();
echo $row->id_barang . " | ";
echo $row->nama_barang . " | ";
echo $row->jumlah_barang . " | ";
echo $row->harga_barang . " | ";
echo $row->tanggal_update . "<br>";

$stmt->free_result();
$stmt->close();
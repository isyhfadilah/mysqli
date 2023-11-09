<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang = ?");
$stmt->bind_param("i", $id_barang);
$id_barang = 5;

$stmt->execute();

$stmt->bind_result($a, $b, $c, $d, $e);
$stmt->fetch();

echo $a."	|	". $b."	|	". $c."	|	". $d. "	|	". $e;

$stmt->free_result();
$stmt->close();
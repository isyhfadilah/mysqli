<?php
// alternatif
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

$arr = $result->fetch_all(MYSQLI_ASSOC);

echo "<pre>";
print_r($arr);
echo "</pre>";

$result->free();
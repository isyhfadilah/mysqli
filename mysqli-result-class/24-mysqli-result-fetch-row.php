<?php
// normal array
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

$row = $result->fetch_row();

echo "<pre>";
print_r($row);
echo "<pre>";

$result->free();
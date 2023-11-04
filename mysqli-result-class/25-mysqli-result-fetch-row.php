<?php
// mengakses data secara langsung
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

$row = $result->fetch_row();

echo $row[0]." | ";
echo $row[1]." | ";
echo $row[2]." | ";
echo $row[3]." | ";
echo $row[4];

$result->free();
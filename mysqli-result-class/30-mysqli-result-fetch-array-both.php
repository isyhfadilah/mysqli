<?php
// kombinasi normal dan assoc array
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

while($row = $result->fetch_array(MYSQLI_BOTH)) {
    echo $row['id_barang'] . " | ";
    echo $row[1] . " | ";
    echo $row['jumlah_barang'] . " | ";
    echo $row[3] . " | ";
    echo $row['tanggal_update'];
    echo "<br>";
}

$result->free();
<?php
// alias atau nama lain fetch_row()
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo $row[0] . " | ";
    echo $row[1] . " | ";
    echo $row[2] . " | ";
    echo $row[3] . " | ";
    echo $row[4];
    echo "<br>";
}

$result->free();
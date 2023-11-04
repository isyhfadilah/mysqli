<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang where id_barang = 1";
$result = $mysqli->query($query);

echo "Terdapat ".$result->field_count." kolom & ".$result->num_rows." baris";
// menghapus memory yang dipakai oleh mysqli_result object
$result->free();
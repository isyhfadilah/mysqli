<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "DELETE FROM barang WHERE id_barang = 3 OR id_barang = 4";
$mysqli->query($query);

echo "Terdapat ".$mysqli->affected_rows." baris yang telah dihapus";
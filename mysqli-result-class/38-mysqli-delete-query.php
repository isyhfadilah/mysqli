<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "DELETE FROM barang WHERE id_barang = 5";
$mysqli->query($query);
echo "Terdapat ".$mysqli->affected_rows." baris yang telah dihapus"; 
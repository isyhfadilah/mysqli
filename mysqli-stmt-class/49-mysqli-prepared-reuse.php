<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

// buat prepared statement untuk ambil data barang 
$query = "SELECT * from barang where id_barang = ?";
$stmt = $mysqli->prepare($query);

// proces bind
$stmt->bind_param("i", $id_barang);

// input data 1
$id_barang = 2;
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_row();
echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
$stmt->free_result();
echo "<br>";

// input data 2 
$id_barang = 16;
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_row();
echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
$stmt->free_result();

// tutup prepared statement
$stmt->close();
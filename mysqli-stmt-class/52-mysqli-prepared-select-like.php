<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$stmt = $mysqli->prepare("SELECT * FROM barang WHERE nama_barang LIKE ?");
$stmt->bind_param("s", $nama_barang);
$nama_barang = "%kulkas%";
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()){
	echo $row['id_barang'];			echo "	|	";
	echo $row['nama_barang'];		echo "	|	";
	echo $row['jumlah_barang'];		echo "	|	";
	echo $row['harga_barang'];		echo "	|	";
	echo $row['tanggal_update'];	
	echo "<br>";
}

$stmt->free_result();
$stmt->close();
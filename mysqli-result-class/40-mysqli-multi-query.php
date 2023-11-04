<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

// generate tanggal hari ini
$now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $now->format('Y-m-d H:i:s');

// jalankan 3bh query
$query = "INSERT INTO barang 
    (nama_barang, jumlah_barang, harga_barang, tanggal_update) 
    VALUES ('Hardisk Eksternal WD My Passport 2TB', 9, 1120000, '$timestamp');
    UPDATE barang SET jumlah_barang = 5, tanggal_update = '$timestamp' WHERE id_barang = 17;
    UPDATE barang SET harga_barang = 4500000, tanggal_update = '$timestamp' WHERE id_barang = 16";

$mysqli->multi_query($query);

echo "Terdapat ".$mysqli->affected_rows." baris yang telah ditambah";
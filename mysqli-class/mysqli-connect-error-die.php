<?php 
$mysqli = new mysqli("localhost", "root", "x");

if ($mysqli->connect_error) {
    die('Koneksi bermasalah (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo "Jalankan query MySQL..."
?>
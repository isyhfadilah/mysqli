<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "autentikasi-multiuser";

// procedural style
$mysqli = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi database gagal");

// object oriented style
// $mysqli = new mysqli($server, $username, $password, $dbname);
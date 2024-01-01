<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "autentikasi-multiuser";

$mysqli = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi database gagal");
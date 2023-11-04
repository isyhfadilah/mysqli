<?php 
$mysqli = new mysqli("localhost", "root", "x");

echo $mysqli->connect_errno, " - ", $mysqli->connect_error;
?>
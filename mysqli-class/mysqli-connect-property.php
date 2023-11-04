<?php 
$mysqli = new mysqli("localhost", "root", "");

echo "affected rows: ", $mysqli->affected_rows, "<br>";
echo "client info: ", $mysqli->client_info, "<br>";
echo "connect errno: ", $mysqli->connect_errno, "<br>";
echo "server info: ", $mysqli->server_info, "<br>"
?>
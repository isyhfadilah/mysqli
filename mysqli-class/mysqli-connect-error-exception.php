<?php 
try {
    $mysqli = new mysqli('localhost', 'root', 'x');

    if ($mysqli->connect_error) {
        throw new Exception('Koneksi bermasalah (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
    }
    
    echo "Jalankan query MySQL...";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
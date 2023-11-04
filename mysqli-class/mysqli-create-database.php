<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS ilkoom";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'ilkoom' berhasil dibuat / sudah tersedia<br>";
    };
}
catch(Exception $e) {
    echo "Koneksi / Query bermasalah: ".$e->getMessage()." (".$e->getCode().")";
}
finally {
    if(isset($mysqli)) {
        $mysqli->close();
    } 
}
?>
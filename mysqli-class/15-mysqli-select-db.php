<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    // buat db
    $query = "CREATE DATABASE IF NOT EXISTS ilkoom";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'ilkoom' berhasil dibuat / sudah tersedia<br>";
    };

    // pilih db
    $mysqli->select_db("ilkoom");
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'ilkoom' berhasil dipilih<br>";
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
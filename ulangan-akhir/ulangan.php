<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS db_karyawan";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database berhasil dibuat <br>";
    }

    $mysqli->select_db("db_karyawan");
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database berhasil dihubungkan <br>";
    }

    $query = "DROP TABLE IF EXISTS data_karyawan";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }

    $query = "CREATE TABLE data_karyawan (
                nomor INT PRIMARY KEY AUTO_INCREMENT,
                nama VARCHAR(100),
                jenis_kelamin VARCHAR(1),
                alamat VARCHAR(100),
                jabatan VARCHAR(100)
    )";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel berhasil dibuat <br>";
    }
}
catch(Exception $e) {
    echo "Koneksi / Query bermasalah: ".$e->getMessage()."( ".$e->getCode()." )";
}
finally{
    if(isset($mysqli)){
        $mysqli->close();
    }
}
?>
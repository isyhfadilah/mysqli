<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS aisyah";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli_errno);
    } else {
        echo "Database aisyah berhasil dibuat <br>";
    }

    $mysqli->select_db('aisyah');
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database aisyah berhasil dipilih <br>";
    }

    $query = "DROP TABLE IF EXISTS barang";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli_errno);
    }

    $query = "CREATE TABLE barang 
                (id_barang INT PRIMARY KEY AUTO_INCREMENT,
                nama_barang VARCHAR(80),
                tanggal_update TIMESTAMP)
            ";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Table barang berhasil di buat <br>";
    }

    $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $timestamp = $sekarang->format('Y:m:d H:i:s');
    $query = "INSERT INTO barang (nama_barang, tanggal_update) VALUES 
                ('Lenovo', '$timestamp'),
                ('Samsung', '$timestamp');
            ";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Table barang berhasil diisi ".$mysqli->affected_rows." baris data";
    }
}
catch(Exception $e) {
    echo "Koneksi / Query bermasalah: ".$e->getMessage()." (".$e->getCode().")";
}
finally {
    if(isset($mysqli)) {
        $mysqli->close();
    }
}
<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS aisyah";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'aisyah' berhasil dibuat / sudah tersedia <br>";
    }

    $mysqli->select_db("aisyah");
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'aisyah' berhasi dipilih <br>";
    }
    
    $query = "DROP TABLE IF EXISTS barang";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }

    $query = "CREATE TABLE barang (
                id_barang INT PRIMARY KEY AUTO_INCREMENT,
                nama_barang VARCHAR(50),
                jumlah_barang INT,
                harga_barang INT,
                tanggal_update TIMESTAMP;
            )";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Table barang berhasil dibuat <br>";
    }

    $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $timestamp = $sekarang->format("Y:m:d H:i:s");

    $query = "INSERT INTO barang (nama_barang, jumlah_barang, harga_barang, tanggal_update) VALUES 
        ('TV Samsung 43NU7090 4K',5,5399000,'$timestamp'),
        ('Kulkas LG GC-A432HLHU',10,7600000,'$timestamp')
    ;";
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Table 'barang' berhasil di isi ".$mysqli->affected_rows." baris data <br>";
    };
}
catch(Exception $e) {
    echo "Koneksi / Query bermasalah: ". $e->getMessage()." (".$e->getCode().")";
}
finally {
    if(isset($mysqli)) {
        $mysqli->close();
    }
}
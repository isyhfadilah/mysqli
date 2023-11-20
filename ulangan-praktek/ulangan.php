<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $koneksi = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS db_percetakan";
    $koneksi->query($query);
    if($koneksi->error) {
        throw new Exception($koneksi->error, $koneksi->errno);
    } else {
        echo "Database berhasil dibuat <br>";
    }

    $koneksi->select_db('db_percetakan');
    if($koneksi->error) {
        throw new Exception($koneksi->error, $koneksi->errno);
    } else {
        echo "Database berhasil dihubungkan <br>";
    }

    $query = "DROP TABLE IF EXISTS harga_barang";
    $koneksi->query($query);
    if($koneksi->error) {
        throw new Exception($koneksi->error, $koneksi->errno);
    };

    $query = "CREATE TABLE harga_barang (
                no_barang INT PRIMARY KEY AUTO_INCREMENT,
                nama_barang VARCHAR(100),
                harga_reseller DEC,
                harga_jual DEC
            )";
    $koneksi->query($query);
    if($koneksi->error) {
        throw new Exception($koneksi->error, $koneksi->errno);
    } else {
        echo "Tabel harga barang berhasil dibuat <br>";
    }

    $query = "INSERT INTO harga_barang 
        (nama_barang, harga_reseller, harga_jual) 
        VALUES
        ('Totebag hitam 30x40 desain 1/2 A4', 25000, 30000),
        ('Totebag hitam 30x40 desain 1 A4', 33000, 35000),
        ('Totebag putih canvas 30x40', 21000, 25000),
        ('Totebag putih blacu 30x40', 17000, 22000),
        ('Mug Putih', 21000, 25000),
        ('Mug Warna', 23000, 27000),
        ('Kaos Pendek Polyester', 40000, 50000),
        ('Ganci 1 sisi', 4000, 5000),
        ('Ganci Akrilik', 4000, 5000),
        ('Pin', 4000, 5000);";

    $koneksi->query($query);
    if($koneksi->error) {
        throw new Exception($koneksi->error, $koneksi->errno);
    } else {
        echo "Tabel harga barang berhasil diisi <br>";
    }
    
}
catch(Exception $e) {
    echo "Koneksi / Query bermasalah: ".$e->getMessage()."( ".$e->getCode()." )";
}
finally{
    if(isset($koneksi)){
        $koneksi->close();
    }
}
?>
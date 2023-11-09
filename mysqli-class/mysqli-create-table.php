<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $mysqli->select_db('ilkoom');
    
    $query = "CREATE TABLE barang (
                id_barang INT PRIMARY KEY AUTO_INCREMENT,
                nama_barang VARCHAR(50),
                jumlah_barang INT,
                harga_barang DEC,
                tanggal_update TIMESTAMP
            )";
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel barang berhasil dibuat<br>";
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
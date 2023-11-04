<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $mysqli->select_db('ilkoom');

    // isi tabel barang
    $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $timestamp = $sekarang->format("Y-m-d H:i:s");

    $query = "INSERT INTO barang 
        (nama_barang, jumlah_barang, harga_barang, tanggal_update) VALUES
        ('TV Samsung 43NU7090 4K',5,5399000,'$timestamp'),
        ('Kulkas LG GC-A432HLHU',10,7600000,'$timestamp'),
        ('Laptop ASUS ROG GL503GE',7,16200000,'$timestamp'),
        ('Printer Epson L220',14,2099000,'$timestamp'),
        ('Smartphone Xiaomi Pocophone F1',25,4750000,'$timestamp')
    ;";
    
    $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno); 
    } else {
        echo "Tabel barang berhasil di isi ".$mysqli->affected_rows." baris data<br>";
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
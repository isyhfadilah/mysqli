<?php
mysqli_report(MYSQLI_REPORT_STRICT);

$_GET['nama_barang'] = "Buku Moody's";

try {
    $mysqli = new mysqli('localhost', 'root', '', 'ilkoom');
    $nama_barang = $mysqli->real_escape_string($_GET['nama_barang']);

    $query = "SELECT * from barang where nama_barang = '$nama_barang'";
    $result = $mysqli->query($query);

    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        if ($result->num_rows === 0) {
            echo 'Data tidak ditemukan';
        } else {
            echo 'Data tersedia';
        }
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
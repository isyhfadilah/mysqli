<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkoom");

    // proces prepare
    $stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang = ?");

    // proces bind
    $id_barang = 16;
    $stmt->bind_param("i", $id_barang);

    // proces execute
    $stmt->execute();

    // proces menampilkan hasil query
    $result = $stmt->get_result();
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        while ($row = $result->fetch_assoc()) {
            echo $row['id_barang'] . ' | ';
            echo $row['nama_barang'] . ' | ';
            echo $row['jumlah_barang'] . ' | ';
            echo $row['harga_barang'] . ' | ';
            echo $row['tanggal_update'] . '<br>';
        }
    }

    // hapus memory dan tutup prepared statement
    $stmt->free_result();
    $stmt->close();
}
catch(Exception $e) {
    echo "Koneksi / query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}
finally {
    if(isset($mysqli)) {
        $mysqli->close();
    }
}
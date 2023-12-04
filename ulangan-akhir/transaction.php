<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'root', '', 'db_karyawan');

    // tampilkan sebelum transaction
    echo "<h3>Before Transaction</h3>";
    $result = $mysqli->query('SELECT * FROM data_karyawan');
    while($row = $result->fetch_array(MYSQLI_NUM)) {
        echo $row[0].' | '.$row[1].' | '.$row[2].' | '.$row[3].' | '.$row[4];
        echo '<br>';
    }
    echo "<hr>";

    // mulai transaction
    $mysqli->begin_transaction();
    $mysqli->query("DELETE FROM data_karyawan WHERE nomor = 1");
    $mysqli->query("DELETE FROM data_karyawan WHERE nomor = 3");

    // tampilkan selama transaction
    echo "<h3>In Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM data_karyawan");
    while($row = $result->fetch_array(MYSQLI_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
        echo "<br>";
    }
    echo "<hr>";

    // batalkan query transaction
    $mysqli->rollback();

    // tampilkan setelah transaction
    echo "<h3>After Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM data_karyawan");
    while($row = $result->fetch_array(MYSQLI_NUM)) {
        echo $row[0].' | '.$row[1].' | '.$row[2].' | '.$row[3].' | '.$row[4];
        echo "<br>";
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
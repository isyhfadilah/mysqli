<?php
mysqli_report(MYSQLI_REPORT_STRICT);

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $sekarang->format('Y-m-d H:i:s');

try {
    $mysqli = new mysqli('localhost', 'root', '', 'ilkoom');

    // tampilkan sebelum transaction
    echo "<h3>Before Transaction</h3>";
    $result = $mysqli->query('SELECT * FROM barang');
    while($row = $result->fetch_array(MYSQLI_NUM)) {
        echo $row[0].' | '.$row[1].' | '.$row[2].' | '.$row[3].' | '.$row[4];
        echo '<br>';
    }
    echo "<hr>";

    // mulai transaction
    $mysqli->begin_transaction();
    $mysqli->query("DELETE FROM barang WHERE id_barang = 2");
    $mysqli->query("DELETE FROM barang WHERE id_barang = 4");
    $mysqli->query("INSERT INTO barang VALUES (NULL, 'Sharp Microwave Oven R-728(K)', 20, 1250500, '$timestamp')");

    // tampilkan selama transaction
    echo "<h3>In Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM barang");
    while($row = $result->fetch_array(MYSQLI_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
        echo "<br>";
    }
    echo "<hr>";

    // batalkan query transaction
    $mysqli->rollback();

    // tampilkan setelah transaction
    echo "<h3>After Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM barang");
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
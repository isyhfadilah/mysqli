<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'root', '');
    $query = "CREAT DATABASE IF NOT EXISTS ilkoom";
    $mysqli->query($query);
    echo "Pesan error MySQL: ".$mysqli->error."<br><br>";
    echo "Nomor error MySQL: ".$mysqli->errno;
}
catch(mysqli_sql_exception $e) {
    echo "Koneksi bermasalah: ". $e->getMessage(). " (".$e->getCode().")";
}
finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}
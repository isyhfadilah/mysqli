<?php 
// belum memberitahukan notif apakah query berhasil atau gagal
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'root', '');
    $query = "CREAT DATABASE IF NOT EXISTS ilkoom";
    $mysqli->query($query);
}
catch(mysqli_sql_exception $e) {
    echo "Koneksi bermasalah: ". $e->getMessage(). " (".$e->getCode().")";
}
finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}
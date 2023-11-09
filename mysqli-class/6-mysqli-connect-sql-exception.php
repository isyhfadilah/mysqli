<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    echo "Jalankan query MySQL...";
}
catch (mysqli_sql_exception $e) {
    echo "Koneksi bermasalah: " . $e->getMessage() . "(" . $e->getCode() . ")";   
}
?>
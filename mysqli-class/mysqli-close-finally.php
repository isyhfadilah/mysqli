<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'root', 'x');
}
catch(mysqli_sql_exception $e) {
    echo "Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ") ";
}
finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}
?>
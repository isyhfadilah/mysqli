<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREAT DATABASE IF NOT EXIST ilkoom";
    $mysqli->query($query);
    if($mysqli->error) {
        die("Query bermasalah: ".$mysqli->error." (".$mysqli->errno.")");
    };
}
catch(mysqli_sql_exception $e) {
    echo "Koneksi bermasalah: ".$e->getMessage()." (".$e->getCode().")";
}
finally {
    if(isset($mysqli)) {
        $mysqli->close();
    }
}

?>

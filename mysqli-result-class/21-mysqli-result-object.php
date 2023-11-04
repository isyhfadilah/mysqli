<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkoom");
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);
    if($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno); 
    } else {
        echo "<pre>";
        print_r($result);
        echo "<pre>";
        $result->free();
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
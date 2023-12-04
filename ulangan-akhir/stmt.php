<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try{
    $mysqli = new mysqli("localhost", "root", "", "db_karyawan");

    $stmt = $mysqli->prepare("INSERT INTO data_Karyawan (nama, jenis_kelamin, alamat, jabatan) VALUES (?,?,?,?)");

    $stmt->bind_param(
        "ssss",
        $nama,
        $jenis_kelamin,
        $alamat,
        $jabatan
    );

    // Data satu
    $nama = "Aisyah Nur Fadilah";
    $jenis_kelamin = "P";
    $alamat = "Sumedang Utara";
    $jabatan = "Front End Developer";

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br><br>";

    // Data dua
    $nama = "Alya Nabila";
    $jenis_kelamin = "P";
    $alamat = "Bekasi";
    $jabatan = "UI UX Designer";

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br><br>";

    // Data tiga
    $nama = "Sandhika Gali";
    $jenis_kelamin = "L";
    $alamat = "Bandung";
    $jabatan = "Back End Developer";

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br><br>";

    // Data empat
    $nama = "Alwi Fajar";
    $jenis_kelamin = "L";
    $alamat = "Sumedang Selatan";
    $jabatan = "CEO";

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br><br>";

    // Data lima
    $nama = "Kenny";
    $jenis_kelamin = "L";
    $alamat = "Jakarta";
    $jabatan = "CTO";

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br><br>";
}
catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}
finally{
    if(isset($mysqli)) {
        $mysqli->close();
    }
}
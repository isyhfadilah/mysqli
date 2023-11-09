<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkoom");

    // Buat format tanggal hari ini
    $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $timestamp = $sekarang->format("Y-m-d H:i:s");

    // Buat prepared statement untuk input data barang
    $stmt = $mysqli->prepare("INSERT INTO barang (nama_barang,
 jumlah_barang, harga_barang, tanggal_update) VALUES (?,?,?,?)");

    $stmt->bind_param(
        "siis",
        $nama_barang,
        $jumlah_barang,
        $harga_barang,
        $tanggal_update
    );

    // Input data 1
    $nama_barang = "Cosmos CRJ-8229 - Rice Cooker";
    $jumlah_barang = 4;
    $harga_barang = 299000;
    $tanggal_update = $timestamp;

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br>";

    // Input data 2
    $nama_barang = "Philips Blender HR 2157";
    $jumlah_barang = 11;
    $harga_barang = 629000;
    $tanggal_update = $timestamp;

    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br><br>";

    $stmt->close();

    // Proses prepare untuk menampilkan semua isi tabel barang
    $stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang");

    // Proses execute
    $stmt->execute();

    // Proses menampilkan hasil query
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo $row['id_barang'];
        echo " | ";
        echo $row['nama_barang'];
        echo " | ";
        echo $row['jumlah_barang'];
        echo " | ";
        echo $row['harga_barang'];
        echo " | ";
        echo $row['tanggal_update'];
        echo "<br>";
    }

    // Hapus memory dan tutup prepared statement
    $stmt->free_result();
    $stmt->close();
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}

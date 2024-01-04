<?php

include "class-data.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$kelas = $_POST['kelas'];

$siswa = new Siswa();

$siswa->simpan_data($nama, $tanggal, $kelas);
header('location:index.php');

?>
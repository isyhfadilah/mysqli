<?php

include "class-data.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$kelas = $_POST['kelas'];

$siswa = new Siswa();

$siswa->update_data($id, $nama, $tanggal, $kelas);
header('location:index.php');

?>
<?php

include 'class-data.php';

$id = $_GET['id'];

$siswa = new Siswa();

$siswa->hapus_data($id);
header('location: index.php');

?>
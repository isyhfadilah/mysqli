<?php
require_once('function/helper.php');

if($_SESSION['role'] !== 'user') {
    header("location: " . BASE_URL . 'dashboard.php?page=admin');
    exit();
}
?>

<h1>Halaman User</h1>
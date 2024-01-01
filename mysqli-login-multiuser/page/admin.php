<?php
require_once('function/helper.php');

if($_SESSION['role'] !== 'admin') {
    header("location: " . BASE_URL . 'dashboard.php?page=user');
    exit();
}
?>

<h1>Halaman Admin</h1>
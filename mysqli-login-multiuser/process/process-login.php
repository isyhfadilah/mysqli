<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

// menangkap request user
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($mysqli, "SELECT * from user WHERE username = '$username' AND password = '$password'");

// mengecek pengguna
if(mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);

    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    if($row['role'] == 'admin') {
        header("location: " . BASE_URL . 'dashboard.php?page=admin');
    } else if($row['role'] == 'user') {
        header("location: " . BASE_URL . 'dashboard.php?page=user');
    }
} else {
    header("location: " . BASE_URL);
}
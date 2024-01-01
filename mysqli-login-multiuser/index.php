<?php
require_once("function/helper.php");
require_once("function/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Login Multiuser</title>
</head>
<body>
    <form method="POST" action="<?= BASE_URL . 'process/process-login.php' ?>">
        <input name="username" type="username" placeholder="username">
        <input name="password" type="password" placeholder="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
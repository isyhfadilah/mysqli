<?php
require_once('function/helper.php');

session_start();

$page = isset($_GET['page']) ? ($_GET['page']) : false;
if($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Multiuser</title>
</head>
<body>
    <div>
        <?php
        $filename = "page/$page.php";

        if(file_exists($filename)) {
            include_once($filename);
        } else {
            echo "404";
        }
        ?>
    </div>
</body>
</html>
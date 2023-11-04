<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");
$query = "SELECT * FROM barang";
$result = $mysqli->query($query);
$arr = $result->fetch_all(MYSQLI_ASSOC);
$result->free();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Table MySQL</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        td, th {
            border-bottom: 1px solid black;
            padding: 10px 15px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Update</th>
        </tr>
        <?php foreach($arr as $key => $val) { ?>
        <tr>
            <td><?php echo $val['id_barang']; ?></td>
            <td><?php echo $val['nama_barang']; ?></td>
            <td><?php echo $val['jumlah_barang']; ?></td>
            <td><?php echo number_format($val['harga_barang'], 0, ',', '.'); ?></td>
            <td>
                <?php 
                    $tanggal = new DateTime($val['tanggal_update']);
                    echo $tanggal->format("d-m-Y H:i");
                ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
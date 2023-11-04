<?php
// mvc
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
            <td><?php echo $val['harga_barang']; ?></td>
            <td><?php echo $val['tanggal_update']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
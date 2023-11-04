<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

$i = 0;
while($row = $result->fetch_assoc()) {
    $arr[$i]['id_barang'] = $row['id_barang'];
    $arr[$i]['nama_barang'] = $row['nama_barang'];
    $arr[$i]['jumlah_barang'] = $row['jumlah_barang'];
    $arr[$i]['harga_barang'] = number_format($row['harga_barang'], 0, ',', '.');

    $tanggal = new DateTime($row['tanggal_update']);
    $arr[$i]['tanggal_update'] = $tanggal->format('d-m-Y H:i');

    $i++;
}
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
            <td><?php echo $val['harga_barang']; ?></td>
            <td><?php echo $val['tanggal_update'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
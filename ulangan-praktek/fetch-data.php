<?php
$koneksi = new mysqli("localhost", "root", "", "db_percetakan");

$query = "SELECT * from harga_barang";
$result = $koneksi->query($query);

$i = 0;
while( $row = $result->fetch_assoc()) {
    $arr[$i]['no_barang'] = $row['no_barang'];
    $arr[$i]['nama_barang'] = $row['nama_barang'];
    $arr[$i]['harga_reseller'] = number_format($row['harga_reseller'], 0, ',', '.');
    $arr[$i]['harga_jual'] = number_format($row['harga_jual'], 0, ',', '.');
    $i++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FETCH</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        td, th{
            border-bottom: 1px solid black;
        }

        th, td{
            padding: 10px 15px;
        }
        
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>HARGA RESELLER</th>
            <th>HARGA JUAL (HET)</th>
        </tr>
        <?php foreach ($arr as $key) {?>
        <tr>
            <td><?php echo $key['no_barang']; ?></td>
            <td><?php echo $key['nama_barang']; ?></td>
            <td><?php echo $key['harga_reseller']; ?></td>
            <td><?php echo $key['harga_jual']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>
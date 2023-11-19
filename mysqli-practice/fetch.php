<?php
$mysqli = new mysqli("localhost", "root", "", "aisyah");

$query = "SELECT * from barang";
$result = $mysqli->query($query);

$i = 0;
while( $row = $result->fetch_assoc()) {
    $arr[$i]['id_barang'] = $row['id_barang'];
    $arr[$i]['nama_barang'] = $row['nama_barang'];

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
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Update</th>
        </tr>
        <?php foreach ($arr as $key) {?>
        <tr>
            <td><?php echo $key['id_barang']; ?></td>
            <td><?php echo $key['nama_barang']; ?></td>
            <td><?php echo $key['tanggal_update']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>
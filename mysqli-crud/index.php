<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP</title>
</head>
<body>
    <a href="input-data.php">TAMBAH DATA</a>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL LAHIR</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
        <?php
        include "class-data.php";
        $siswa = new Siswa();
        foreach($siswa->tampil_data() as $data) {
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td>
                <a href="">EDIT</a> | <a href="">HAPUS</a>
            </td>
        </tr>
        <?php  
        }
        ?>
    </table>
</body>
</html>
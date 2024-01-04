<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <form action="aksi-edit.php" method="post">
    <?php
    $id = $_GET['id'];
    include 'class-data.php';
    $siswa = new Siswa();
    foreach($siswa->tampil_update($id) as $data) {
    ?>
        <table border="1">
            <tr>
                <td>NAMA SISWA</td>
                <td>
                    <input type="text" name="nama" value='<?= $data['nama'] ?>'>
                </td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>
                    <input type="date" name="tanggal" value='<?= $data['tanggal'] ?>'>
                </td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td>
                    <input type="text" name="kelas" value='<?= $data['kelas'] ?>'>
                </td> 
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value='UPDATE DATA'>
                </td>
            </tr>
        </table>
        <?php
    }
    ?>
    </form>
</body>
</html>
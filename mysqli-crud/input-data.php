<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form action="aksi-input.php" method="post">
        <table border="1">
            <tr>
                <td>NAMA SISWA</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td>
                    <input type="text" name="kelas">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value='SIMPAN DATA'>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 

class Siswa {
    
    private $host = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $database = 'crud';
    private $conn;

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->database);
    }

    function tampil_data() {
        $query = mysqli_query($this->conn, 'select * from siswa');

        while($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }

        return $data;
    }

    function simpan_data($nama, $tanggal, $kelas) {
        $query = mysqli_query($this->conn, "insert into siswa values('', '$nama', '$tanggal', '$kelas')");
    }

    function tampil_update($id) {
        $query = mysqli_query($this->conn, "select * from siswa where id='$id'");

        while($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }

        return $data;
    }

    function update_data($id, $nama, $tanggal, $kelas) {
        $query = "update siswa set nama='$nama', tanggal='$tanggal', kelas='$kelas' where id='$id'";
        $result = mysqli_query($this->conn, $query);

        if($result) {
            return true;
        } else {
            $error = mysqli_error($this->conn);
            echo "Error: $error";
            return false;
        }
    }
}
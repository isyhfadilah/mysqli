<?php 

class Siswa {
    
    private $host = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $database = 'crud';
    private $con;

    function __construct() {
        $this->con = mysqli_connect($this->host, $this->username, $this->pass, $this->database);
    }

    function tampil_data() {
        $query = mysqli_query($this->con, 'SELECT * FROM siswa');

        while($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }

        return $data;
    }
}
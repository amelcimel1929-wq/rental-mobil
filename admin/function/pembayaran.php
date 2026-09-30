<?php

require_once 'database/connection.php';

class pembayaran
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function tambah(
        $id_penawaran,
        $total_bayar,
        $status,
    ) {

        $var_id_penawaran = mysqli_real_escape_string(
            $this->conn,
            $id_penawaran
        );
         $var_total_bayar = mysqli_real_escape_string(
            $this->conn,
            $total_bayar
        );
         $var_status = mysqli_real_escape_string(
            $this->conn,
            $status
        );
        

        $query = "INSERT INTO pembayaran
                  (id_penawaran, total_bayar, status)
                  VALUES (
                  '$id_penawaran',
                  '$total_bayar',
                  'status',
                  )";

        return mysqli_query($this->conn, $query);
    }
}
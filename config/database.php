<?php
class Database
{
    private $host;
    private $user;
    private $password;
    private $db;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
    }

    function connect()
    {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if($connection->connect_errno) {
            error_log("DATABASE::connect -> Error en la conexion con la BD");
            exit();
        }
    }
}

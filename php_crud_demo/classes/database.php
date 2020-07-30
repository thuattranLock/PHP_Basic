<?php 
class Database {

    private $host = "sql303.epizy.com";
    private $dbName = "epiz_26361773_cruduser";
    private $userName = "epiz_26361773";
    private $password = "amSsD8SvjPq";

    public $conn;

    public function dbConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host .";dbname=" . $this->dbName, $this->userName, $this->password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
        } catch (PDOException $exception) {
            echo "connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
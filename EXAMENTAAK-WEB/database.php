<?php
    class Database {
        private $hostname = "ID362601_sortinghat.db.webhosting.be";
        private $dbUser = "ID362601_sortinghat";
        private $dbPassword = "sortinghatSander01";
        private $dbName = "ID362601_sortinghat";
        private $dbPort = 3306;
        private $conn;

        function __construct() {
            $this->conn = $this->createConnection();
        }

        function createConnection() {
            $conn = mysqli_connect($this->hostname, $this->dbUser, $this->dbPassword, $this->dbName, $this->dbPort);

            if ($conn == false) {
                echo "Aj aj t is broke";
                die();
            }

            return $conn;
        }
    
        function getQuery($query) {
            return mysqli_query($this->conn, $query)->fetch_all(MYSQLI_ASSOC);
        }
    
        function InsertQuery($query) {
            mysqli_query($this->conn,$query);
        }
    
        function closeConnection() {
            $this->conn->close();
        }
    }
    $databaselocal = new Database("ID362601_sortinghat.db.webhosting.be", "ID362601_sortinghat", "sortinghatSander01", "ID362601_sortinghat", 3306)
?>
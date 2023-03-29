<?php
    class Database {
        
        private $host;
        private $db_name;
        private $username;
        private $password;
        public $conn;

        public function __construct($host, $db_name, $username , $password) {
            $this->host = $host;
            $this->db_name = $db_name;
            $this->username = $username;
            $this->password = $password;
        }

        public function connect() {
            try {
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }

            return $this->conn;
        }
        public function query($sql) {
            $this->conn->query($sql);
        }

    }


 ?>
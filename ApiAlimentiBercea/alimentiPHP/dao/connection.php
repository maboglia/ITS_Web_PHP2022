<?php

    class Connection {

        // db variables
        private $host = "localhost";
        private $user = "raul";
        private $password = "123";
        private $db_name = "wordpress";

        private $conn;

        public function connect(){
            // connection to db test
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}",$this->user,$this->password);
                // echo 'connected';
            }
            catch (PDOException $e){
                echo 'connection error : ' .$e->getMessage();
            }
        } 

        public function getConn(){
            return $this->conn;
        }

    }

?>
<?php
    class Database{
        private $conn;

        public function connect() {
            $this->conn = new mysqli("localhost", "root", "", "bbm_coba");
            return $this->conn;
        }

        public function close(){
            return $this->conn->close();
        }
    }

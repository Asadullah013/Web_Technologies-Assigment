<?php

    class Database{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "hr";
        protected $con;

        public function __construct()
        {
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
            if(!$this->con)
            {
                echo "Not Connected";
            }
        }
    }

?>
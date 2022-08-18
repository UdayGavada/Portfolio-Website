<?php
    class contact
    {
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="uday";
        public $mysqli;

        public function __construct() 
            {
                return $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
            }

        public function contact($data){
            $name=$data['name'];
            $email=$data['email'];
            $phoneno=$data['phoneno'];
            $message=$data['message'];
            $q="insert into contact set name='$name', email='$email', phoneno='$phoneno', message='$message'";
            $data = $this->mysqli->query($q);
        }
    }
?>
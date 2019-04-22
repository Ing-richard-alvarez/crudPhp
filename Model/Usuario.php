<?php 
    class Usuario extends EntidadBase 
    {

        private $name;
        private $password;

        public function __construct() {
            $table = "users";
            parent::__construct($table);
        }
    
        public function getName() {
            return $this->name;
        }
        
        public function setName($name) {
            $this->name = $name;
        }
        public function getPassword() {
            return $this->password;
        }
        
        public function setPassword($password) {
            $this->password = $password;
        }

        public function save() {
            $query = "INSERT INTO users(name, pass) VALUES('".$this->name."', '".$this->password."');";
            $save = $this->db()->query($query);
            //$this->db()->error;
            return $save;
 
        }
    }
    
?>
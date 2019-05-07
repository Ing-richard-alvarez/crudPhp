<?php
use ___PHPSTORM_HELPERS\object;

class EntidadBase {

        private $table;
        private $db;
        private $conectar;
 
        public function __construct($table) {
            $this->table = (string) $table;
            
            require_once 'Conectar.php';
            $this->conectar = new Conectar();
            $this->db = $this->conectar->conexion();

        }
          
        public function getConetar(){
            return $this->conectar;
        }
        
        public function db(){
            return $this->db;
        }
        
        public function getAll(){
            $query=$this->db->query("SELECT * FROM $this->table WHERE state=1");
            
            if($query->num_rows != 0){
                while ($row = $query->fetch_object()) {
                    $resultSet[]=$row;
                }
            }else{
                $resultSet = null;
            }
            
            
            return $resultSet;
        }
        
        public function getAllJson(){
            //header('Content-Type: application/json');
            $query = $this->db()->query("SELECT * FROM $this->table");
            $ciudades = array();
            while(($row =$query->fetch_array()) != NULL){
                $ciudades[$row['id']] = $row['name'];
            }
            return $ciudades;
        }

        public function getById($id){
            $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id LIMIT 1");
            
            if($row = $query->fetch_object()) {
                $resultSet = $row;
            }
            return $resultSet;
        }
        
        public function getBy($column,$value){
            $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
    
            while($row = $query->fetch_object()) {
                $resultSet[]=$row;
            }
            
            return $resultSet;
        }
        
        public function deleteById($id){
            $query=$this->db->query("UPDATE $this->table SET state=0 WHERE id=$id");
            return $query;
        }
        
        public function deleteBy($column,$value){
            $query=$this->db->query("UPDATE $this->table SET state=0 WHERE $column='$value'");
            return $query;
        }
        
        public function countRegister(){
            $query = "SELECT COUNT(*) AS total_registro FROM $this->table";
            $result = $this->db()->query($query);
            $rowCount = $result->num_rows;
            
        }
    }
?>
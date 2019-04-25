<?php 
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
            $query=$this->db->query("SELECT * FROM $this->table");
    
            while ($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            
            return $resultSet;
        }
        
        public function getAllJsonCiudad($name){
            //header('Content-Type: application/json');
            $query = $this->db()->query("SELECT * FROM cities");
            $ciudades = array();
            while(($row =$query->fetch_array()) != NULL){
                $ciudades[$row['id']] = $row[$name];
            }
            return $ciudades;
        }

        public function getById($id){
            $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
    
            if($row = $query->fetch_object()) {
            $resultSet=$row;
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
            $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
            return $query;
        }
        
        public function deleteBy($column,$value){
            $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
            return $query;
        }
        
    
        /*
        * Aqui podemos montarnos un monton de métodos que nos ayuden
        * a hacer operaciones con la base de datos de la entidad
        */

        
    }
?>
<?php
    class Clientes extends EntidadBase {

        private $codigo;
        private $nombre;
        private $ciudad;

        public function __construct() {
            $table = "client";
            parent::__construct($table);
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getCiudad(){
            return $this->ciudad;
        }

        public function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }

        public function save(){ 
            $query = "INSERT INTO client(cod,name,city) VALUES('".$this->codigo."', '".$this->nombre."','".$this->ciudad."')";
            $save = $this->db()->query($query);

            return $save;
        }

        public function update($id){
            $query = "UPDATE $this->table SET cod=$this->codigo, name=$this->nombre, city=$this->ciudad WHERE id=$id";
            $update = $this->db()->query($query) ;

            return $update;
        }
    }

?>
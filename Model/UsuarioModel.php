<?php
    class UsuarioModel extends ModelBase {
         
        public function __construct($table){
            $this->table="users";
            parent::__construct($this->table);
        }
        
        //Metodos de consulta
        public function getUnUsuario(){
            $query="SELECT * FROM users WHERE name='victor@victor.com'";
            $usuario=$this->ejecutarSql($query);
            return $usuario;
        }

    }
?>
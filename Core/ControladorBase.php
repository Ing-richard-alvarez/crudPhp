<?php 
    class ControladorBase {

        public function __construct() {
            require_once 'EntidadBase.php';
            require_once 'ModelBase.php';
                
            //Incluir todos los modelos
            foreach(glob("Model/*.php") as $file){
                require_once $file;
            }
        }
             
        //Plugins y funcionalidades
            
        public function view($vista,$datos){ 
            foreach ($datos as $id_assoc => $valor) {
                ${$id_assoc} = $valor;
            }
                
            require_once 'Core/ayudaVistas.php';
            $helper = new AyudaVistas();
            
            require_once 'View/'.$vista.'View.php';
        }
            
        public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
            header("Location:index.php?controller=".$controlador."&action=".$accion);
        }
            
        //Métodos para los controladores
         
        
    
    }
?>
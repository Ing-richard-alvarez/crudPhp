<?php 
    class AyudaVistas {

        public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
            $urlString="index.php?controller=".$controlador."&action=".$accion;
            return $urlString;
        }
         
        //Helpers para las vistas
        public function urlClient($controlador=CONTROLADOR_DEFECTO_CLIENT,$accion=ACCION_DEFECTO_CLIENTE){
            $urlString="index.php?controller=".$controlador."&action=".$accion;
            return $urlString;
        }
        
    }
?>
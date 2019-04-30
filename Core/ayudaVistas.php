<?php 
    class AyudaVistas {

        public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
            $urlString="index.php?controller=".$controlador."&action=".$accion;
            return $urlString;
        }
         
        //Helpers para las vistas
        public function urlClient($controlador='Client',$accion='clientDashboard'){
            $urlString="index.php?controller=".$controlador."&action=".$accion;
            return $urlString;
        }
        
    }
?>
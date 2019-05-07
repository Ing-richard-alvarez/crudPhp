<?php

    class LoginController extends ControladorBase {
        
        public function __construct() {
            parent::__construct();
        }

        public function index(){
            
            //Creamos el objeto usuario
            $login = new Login();
            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
                "Hola"    =>"Soy richard alvarez"
            ));
            
            if(!empty($_POST['name']) && !empty($_POST['password'])){
                $this->redirect("Usuarios","dashboard");
            }
            
            
            //$this->redirect("Usuarios", "dashboard");
        }

    }
    
?>
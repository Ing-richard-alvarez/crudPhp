<?php
    class UsuariosController extends ControladorBase {

        public function __construct() {
            parent::__construct();
        }
        

        //vista para renderizar el dashboard  para los usuarios
        public function dashboard(){
            $usuario = new Usuario();
            $allUserJson = $usuario->getAllJson();
            
            $allUser = $usuario->getAll();
			$allUsers = $allUser;

            $this->view("dashboard",array(
                "allUsers" => $allUsers,
                "allUserJsons" => json_encode($allUserJson)

            ));
        }
        
        //Funcion que permite crear usuarios
        public function crear() {
            $this->view("crearUsuarios", array(
                "usuario" => "Bienvenido richard"
            ));

            if(isset($_POST["name"]) && isset($_POST["password"])&& isset($_POST["password2"])){
                if($_POST["password"] == $_POST["password2"]){
                    $usuario = new Usuario();
                    $usuario->setName($_POST["name"]);
                    $usuario->setPassword(sha1($_POST["password"]));
                    $save=$usuario->save();

                    $this->redirect("Usuarios", "dashboard");
                }
            }

        }

        /*Funcion que permite enviar a la vista de edicion de informacion del usuario, los
        * datos que este tiene para ser modificado
        */
        public function actualizarUsuario(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                  
                $usuario = new Usuario();
                
                $this->view("dashboard", array(
                    "allUsers" => $usuario->getAll(),
                   "userUpdates" =>  $usuario->getById($id)
                ));
            }
        }

        /* Función que permite borrar un usuario a parte del Id recibido desde la URL */
        public function borrar(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                  
                $usuario = new Usuario();
                $usuario->deleteById($id);
            }
            $this->redirect("Usuarios","dashboard");
        }

        public function getPagination(){
            $usuario = new Usuario();
            
        }
    
    }
?>
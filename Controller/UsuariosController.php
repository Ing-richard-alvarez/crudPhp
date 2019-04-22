<?php
    class UsuariosController extends ControladorBase {

        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
         
            //Creamos el objeto usuario
            $usuario = new Usuario();
             
            //Conseguimos todos los usuarios
            $allusers = $usuario->getAll();
            
            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
                "allusers"=>$allusers,
                "Hola"    =>"Soy richard alvarez"
            ));
        }

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

                    $this->redirect("Usuarios", "index");
                }
            }

        }
        
        public function borrar(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                  
                $usuario = new Usuario();
                $usuario->deleteById($id);
            }
            $this->redirect();
        }
    
    }
?>
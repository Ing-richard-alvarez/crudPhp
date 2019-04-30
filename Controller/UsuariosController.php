<?php
    class UsuariosController extends ControladorBase {

        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
         
            //Creamos el objeto usuario
            $usuario = new Usuario();
            if(isset($_POST["name"]) && isset($_POST["password"])){
                $usuario->setName($_POST["name"]);
                $usuario->setPassword($_POST["password"]);
                $login = $usuario->login();

                if($login){
                    $this->redirect("Usuarios", "dashboard");
                }
                   
            }else {
                $login = "no trae nada";
            }
            

            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
                "login" => $login,
                "Hola"    =>"Soy richard alvarez"
            ));
            
        }

        //vista para renderizar el dashboard  para los usuarios
        public function dashboard(){
            $usuario = new Usuario();
            $allUser = $usuario->getAll();
            $allUserJson = $usuario->getAllJsonCiudad('municipio');
               
            $this->view("dashboard",array(
                "allUsers" => $allUser,
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

        //Función que renderiza la vista del dasboard para los clientes
        public function dashboardClient(){
            $cliente = new Clientes();
            $allClient = $cliente->getAll();

            $this->view("dashboardCliente", array(
                "allClients" => $allClient
            ));
        }
        
        
        public function actualizarCliente(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                  
                $cliente = new Clientes();
                
                $this->view("updateClient", array(
                   "clientUpdates" =>  $cliente->getById($id)
                ));
            }
        }

        public function crearCliente() {
        
            if(isset($_POST["codigo"]) && isset($_POST["name"])&& isset($_POST["ciudad"])){
                
                $cliente = new Clientes();
                $cliente->setCodigo($_POST["codigo"]);
                $cliente->setNombre($_POST["name"]);
                $cliente->setCiudad($_POST["ciudad"]);
                $save=$cliente->save();
                $this->redirect("Usuarios", "dashboardClient");
            }

        }

        public function borrarCliente(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                  
                $cliente = new Clientes();
                $cliente->deleteById($id);
            }
            $this->redirect("Usuarios","dashboardClient");
        }
    
    }
?>
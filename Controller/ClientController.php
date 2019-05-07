<?php 

    class ClientController extends ControladorBase {

        public function __construct()
        {
            parent::__construct();
        }

        public function dashboardClient(){
            $cliente = new Clientes();
            
            $total_registro = $cliente->countRegister();

			$por_pagina = 5;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
            $total_paginas = ceil($total_registro / $por_pagina);
            $allClient = $cliente->getAll($desde,$por_pagina);
            
            $this->view("dashboardCliente", array(
                "allClients" => $allClient
            ));
        }

        public function renderFormUpdate(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                $cliente = new Clientes();
                //renderiza la vista de actualizar datos del cliente
                $this->view("updateClient", array(
                    "clientUpdates" =>  $cliente->getById($id)
                ));       
            }
        }

        public function updateClient(){
            if(isset($_POST["codigo"]) && isset($_POST["nombre"]) && isset($_POST[" "])){
                if(isset($_GET["id"])){
                    $id = (int)$_GET["id"];
                }
                $cliente = new Clientes();  
                $cliente->setCodigo($_POST["codigo"]);
                $cliente->setNombre($_POST["nombre"]);
                $cliente->setCiudad($_POST["ciudad"]);
                $update = $cliente->update($id);
                 
                $this->redirectClient("Client", "dashboardClient");
            }
        }
        public function crearCliente() {
        
            if(isset($_POST["codigo"]) && isset($_POST["name"])&& isset($_POST["ciudad"])){
                
                $cliente = new Clientes();
                $cliente->setCodigo($_POST["codigo"]);
                $cliente->setNombre($_POST["name"]);
                $cliente->setCiudad($_POST["ciudad"]);
                $save=$cliente->save();
                $this->redirectClient("Client", "dashboardClient");
            }

        }

        public function borrarCliente(){
            if(isset($_GET["id"])){
                $id = (int)$_GET["id"];
                  
                $cliente = new Clientes();
                $cliente->deleteById($id);
            }
            $this->redirectClient("Client","dashboardClient");
        }
    }
?>
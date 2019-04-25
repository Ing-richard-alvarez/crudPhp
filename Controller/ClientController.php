<?php
    class ClientController extends ControladorBase {
        
        public function __construct() {
            parent::__construct();
        }

        public function clientDashboard(){
            $clientes = new Clientes();
            $allClient = $clientes->getAll();

            $this->view("clientDashboard",array(
                "allClients" => $allClient
            ));
        }
    }
?>
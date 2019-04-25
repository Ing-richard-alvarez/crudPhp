<?php
class cityController extends ControladorBase {
    
    public function __construct() {
        parent::__construct();
    }

    public function loadCity() {
        $ciudad = new Ciudad();
        $allCityJson = $ciudad->getAllJson('municipio');

        $this->view("dashboard",array(
            "allCityJsons" => $allCityJson
        ));
    }

}
<?php
    //https://medium.com/shecodeafrica/building-your-own-custom-php-framework-part-1-1d24223bab18

    //https://victorroblesweb.es/2014/07/15/ejemplo-php-poo-mvc/

    //https://www.youtube.com/watch?v=3xdxhfNg3Xg (ver parte 2)

    

    //Confguración global
    require_once 'Config/global.php';

    //Base para los controladores
    require_once 'Core/ControladorBase.php';

    //Funciones para el controlador frontal
    require_once 'Core/ControladorFrontal.func.php';

    //Cargamos controladores y acciones
    if(isset($_GET["controller"])){
        $controllerObj=cargarControlador($_GET["controller"],$_GET["action"]);
        
    }else{
        $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    
    }
    lanzarAccion($controllerObj);

?>
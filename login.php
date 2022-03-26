<?php
    require_once("config/conexion.php");
    require_once("controllers/loginController.php");
    $controlador= new Login_Controller();
    if(!isset($_REQUEST['c'])){
        $controlador->index();
    }else{
        $action = $_REQUEST['c'];
        if ($action == "login") {
            call_user_func(array($controlador,$action));
        }
        elseif($action == "destroy_session"){
            call_user_func(array($controlador,$action));
        }elseif($action == "Registro_General"){
            call_user_func(array($controlador,$action));
        }elseif($action == "Registro"){
            call_user_func(array($controlador,$action));
        }else{
            $controlador->index();
        }
        
    }
?>
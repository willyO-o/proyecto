<?php


class ControlSesion{

    
    public function __construct()
    {
        if(!isset($_SESSION['logueado'])){
            $_SESSION['error'][] = 'Debe iniciar sesión, para acceder a esta página';
            header('Location: ' . BASE_URL . 'login');
        }        
    }
    
}
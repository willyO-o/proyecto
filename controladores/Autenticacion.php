<?php

require_once 'modelos/ModeloUsuario.php';
class Autenticacion
{
    protected $modeloUsuario;


    public function __construct()
    {
        $this->modeloUsuario = new ModeloUsuario();
    }

    public function login()
    {
        include 'vistas/login.php';
    }

    public function registro()
    {

         include 'vistas/registro.php';
    }

    public function autenticar()
    {
        $usuario = post('usuario');
        $clave = post('clave');

        // if(empty($usuario) || empty($clave)){
            
        //     $_SESSION['error'][] = 'Usuario y/o clave incorrectos';
        //     return;
        // }

        $resultado= $this->modeloUsuario->validar_datos($usuario,$clave);

        if(empty($resultado)){

            $_SESSION['error'][] = 'Usuario y/o clave incorrectos';

            return    header('Location: ' . BASE_URL . 'login');
        }


        $_SESSION['usuario'] = $resultado['usuario'];
        $_SESSION['logueado'] = true;

        header('Location: ' . BASE_URL . 'principal');
        
    }

    public function salir()
    {
        session_destroy();

        unset($_SESSION['usuario']);
        unset($_SESSION['logueado']);
        header('Location: ' . BASE_URL);
    }
}
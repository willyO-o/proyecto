<?php

require_once 'modelos/ModeloPersona.php';

class Autenticacion
{
    protected $modeloPersona;


    public function __construct()
    {
        $this->modeloPersona = new ModeloPersona();
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

        $resultado = $this->modeloPersona->validarDatos($usuario, $clave);

        if (empty($resultado)) {

            $_SESSION['error'][] = 'Usuario y/o clave incorrectos';

            return    header('Location: ' . BASE_URL . 'login');
        }


        $_SESSION['usuario'] = $resultado['nombres'].' '.$resultado['apellidos'];
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
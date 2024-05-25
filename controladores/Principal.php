<?php
require_once 'controladores/ControlSesion.php';

class Principal extends ControlSesion
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function principal()
    {
        $vista = 'principal';

        cargarVista('plantilla', [
            'vista' => $vista,
        ]);

    }
}
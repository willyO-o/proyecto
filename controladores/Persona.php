<?php

require_once 'modelos/ModeloPersona.php';

class Persona{

    protected $modeloPersona;

    public function __construct()
    {
        $this->modeloPersona = new ModeloPersona();
    }

    public function listar()
    {
        $vista = 'persona/listar';

        cargarVista('plantilla',[
            'vista'=>$vista,
            'listadoPersonas'=>$this->modeloPersona->listar()
        ]);
    }

    public function crear()
    {
        $vista = 'persona/crear';

        cargarVista('plantilla',[
            'vista'=>$vista,
        ]);
    }
}
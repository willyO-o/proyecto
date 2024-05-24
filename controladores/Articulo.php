<?php

require_once 'modelos/ModeloArticulo.php';
require_once 'modelos/ModeloCategoria.php';
class Articulo
{

    protected $modeloArticulo;
    protected $modeloCategoria;
    protected $modeloPersona;

    public function __construct()
    {
        $this->modeloArticulo = new ModeloArticulo();
        $this->modeloCategoria = new ModeloCategoria();
    }

    public function listar()
    {
        $vista = 'articulo/listar';

        cargarVista('plantilla',[
            'vista'=>$vista,
            'listadoArticulos'=>[]
        ]);
    }

    public function crear()
    {
        $vista = 'articulo/crear';

        

        cargarVista('plantilla',[
            'vista'=>$vista,
            'categorias'=>$this->modeloCategoria->listar(),
        ]);
    }


}
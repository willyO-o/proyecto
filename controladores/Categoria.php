<?php

require_once 'modelos/ModeloCategoria.php';
require_once 'controladores/ControlSesion.php';
class Categoria extends ControlSesion
{

    protected $modeloCategoria;


    public function __construct()
    {
        parent::__construct();
        $this->modeloCategoria = new ModeloCategoria();
    }


    public function listar()
    {
        $vista = 'categoria/listar';

        $listadoCategorias = $this->modeloCategoria->listar();


        cargarVista('plantilla', [
            'vista' => $vista,
            'listadoCategorias' => $listadoCategorias
        ]);
    }
    public function crear()
    {
        $vista = 'categoria/crear';

        cargarVista('plantilla', [
            'vista' => $vista
        ]);
    }

    public function registrar()
    {
        $categoria = post('categoria');

        if (empty($categoria)) {
            $_SESSION['error'][] = 'El campo categoria es obligatorio';

            return    header('Location: ' . url('categoria/crear'));
        }

        $datos = [
            'categoria' => $categoria
        ];

        $this->modeloCategoria->registrar($datos);

        return    header('Location: ' . url('categoria'));
    }

    public function editar($idCategoria = null)
    {
        $vista = 'categoria/crear';

        $categoria = $this->modeloCategoria->listarId($idCategoria);

        cargarVista('plantilla', [
            'vista' => $vista,
            'categoria' => $categoria
        ]);
    }

    public function actualizar()
    {
        $categoria = post('categoria');
        $idCategoria = post('id_categoria');

        if (empty($categoria)) {
            $_SESSION['error'] = 'El campo categoria es obligatorio';

            return    header('Location: ' . url('categoria/editar/' . $idCategoria));
        }

        $datos = [
            'categoria' => $categoria,
        ];

        $this->modeloCategoria->actualizar($datos, $idCategoria);

        return    header('Location: ' . url('categoria'));
    }

    public function eliminar($idCategoria = null)
    {
        if (!empty($idCategoria)) {
            $this->modeloCategoria->eliminar($idCategoria);
        }

        return    header('Location: ' . url('categoria'));
    }
}

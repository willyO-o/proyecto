<?php

require_once 'modelos/ModeloPersona.php';
require_once 'controladores/ControlSesion.php';

class Persona extends ControlSesion
{

    protected $modeloPersona;

    public function __construct()
    {
        parent::__construct();
        $this->modeloPersona = new ModeloPersona();
    }

    public function listar()
    {
        $vista = 'persona/listar';

        cargarVista('plantilla', [
            'vista' => $vista,
            'listadoPersonas' => $this->modeloPersona->listar()
        ]);
    }

    public function crear()
    {
        $vista = 'persona/crear';

        cargarVista('plantilla', [
            'vista' => $vista,
        ]);
    }

    public function editar($idPersona = null)
    {
        $vista = 'persona/crear';
        $persona = $this->modeloPersona->listarId($idPersona);

        cargarVista('plantilla', [
            'vista' => $vista,
            'persona' => $persona
        ]);
    }

    public function registrar()
    {
        $datos = [
            "nombres" => post('nombres'),
            "apellidos" => post('apellidos'),
            "telefono" => post('telefono'),
            "correo" => post('correo'),
            "clave" => post('clave'),
            "estado" => post('estado'),
            "rol" => post('rol'),
        ];


        $erroresValidacion = false;

        foreach ($datos  as $llave => $valor) {
            if (empty($valor)) {
                $erroresValidacion = true;
                $_SESSION['error'][] = "El campo " . $llave . " es requerido";
            }
        }

        if ($erroresValidacion) {

            return header('Location:' . BASE_URL . 'persona/crear');
        }

        $datos['clave'] = md5($datos['clave']);

        
        $this->modeloPersona->registrar($datos);

        return header('Location:' . BASE_URL . 'persona');
    }

    public function eliminar($idPersona = null)
    {
        $this->modeloPersona->eliminar($idPersona);

        return header('Location:' . BASE_URL . 'persona');
    }


    public function actualizar()
    {

        $datos = [
            "nombres" => post('nombres'),
            "apellidos" => post('apellidos'),
            "telefono" => post('telefono'),
            "correo" => post('correo'),
            "estado" => post('estado'),
            "rol" => post('rol'),
        ];

        $erroresValidacion = false;

        foreach ($datos  as $llave => $valor) {
            if (empty($valor)) {
                $erroresValidacion = true;
                $_SESSION['error'][] = "El campo " . $llave . " es requerido";
            }
        }

        $idPersona = post('id_persona');

        if ($erroresValidacion) {

            return header('Location:' . BASE_URL . 'persona/editar/' . $idPersona);
        }


        if (post('clave') != null && post('clave') != "") {
            $datos['clave'] = md5(post('clave'));
        }

        $this->modeloPersona->actualizar($datos, $idPersona);

        return header('Location:' . BASE_URL . 'persona');
    }
}

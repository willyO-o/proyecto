<?php

require_once 'modelos/Conexion.php';

class ModeloArticulo extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        $sql = "SELECT * FROM articulo";
        $resultado = $this->conexion->query($sql);

        return $resultado->fetch_all();
    }


}
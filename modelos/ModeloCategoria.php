<?php

require_once 'modelos/Conexion.php';

class ModeloCategoria extends Conexion
{


    public function __construct()
    {
        parent::__construct();
    }


    public function listar()
    {
        $sql = "SELECT * FROM categoria";

        $resultado = $this->conexion->query($sql);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function listarId($idCategoria)
    {
        $sql = "SELECT * FROM categoria WHERE id_categoria = $idCategoria  LIMIT 1";

        $resultado = $this->conexion->query($sql);

        $categoria = $resultado->fetch_all(MYSQLI_ASSOC);

        return $categoria[0] ?? null;
    }


    public function registrar($datos)
    {
        $sql = "INSERT INTO categoria (categoria) VALUES ('{$datos['categoria']}')";

        return $this->ejecutarInsercion($sql);
    }


    public function eliminar($idCategoria)
    {
        $sql = "DELETE FROM categoria WHERE id_categoria = $idCategoria";

        return $this->conexion->query($sql);
    }

    public function actualizar($datos,$idCategoria)
    {
        $sql = "UPDATE categoria SET categoria = '{$datos['categoria']}' WHERE id_categoria = $idCategoria";

        return $this->conexion->query($sql);
        
    }
}

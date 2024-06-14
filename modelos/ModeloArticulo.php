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
        $sql = "SELECT * FROM articulo a JOIN categoria c ON a.id_categoria = c.id_categoria JOIN persona p ON a.id_persona_responsable = p.id_persona";
        $resultado = $this->conexion->query($sql);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function registrar($datos)
    {
        $sql = "INSERT INTO articulo (nombre_articulo, descripcion, fecha_adquisicion, costo_adquisicion, id_categoria, id_persona_responsable, imagen) 
         VALUES ('{$datos['nombre_articulo']}','{$datos['descripcion']}','{$datos['fecha_adquisicion']}','{$datos['costo_adquisicion']}','{$datos['id_categoria']}','{$datos['id_persona_responsable']}','{$datos['imagen']}')";

        $resultado = $this->ejecutarInsercion($sql);


        return $resultado;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM articulo WHERE id_articulo = $id";

        return $this->conexion->query($sql);
        
    }


}

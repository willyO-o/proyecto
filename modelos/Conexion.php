<?php

class Conexion
{

    protected $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli('localhost', 'root', '', 'proyecto');
        $this->conexion->set_charset('utf8');
    }


    public function ejecutarInsercion($sql)
    {
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            $idInsertado = $this->conexion->insert_id;
            $this->conexion->close();

            return $idInsertado;
        } else {
            return false;
        }
    }


}

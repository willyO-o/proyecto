<?php

require_once 'modelos/Conexion.php';

class ModeloPersona extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        $sql = "SELECT * FROM persona";

        $resultado = $this->conexion->query($sql);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function listarId($idPersona)
    {
        $sql = "SELECT * FROM persona WHERE id_persona = $idPersona  LIMIT 1";

        $resultado = $this->conexion->query($sql);

        $persona = $resultado->fetch_all(MYSQLI_ASSOC);

        return $persona[0] ?? null;
    }

    public function listarCampo($campo, $valor)
    {
        $sql = "SELECT * FROM persona WHERE $campo = '$valor'  ";

        $resultado = $this->conexion->query($sql);

        $persona = $resultado->fetch_all(MYSQLI_ASSOC);

        return $persona;
    }

    public function registrar($datos)
    {
        $sql = "INSERT INTO persona (nombres,apellidos,telefono,correo,clave,estado,rol) 
                VALUES ('{$datos['nombres']}','{$datos['apellidos']}',{$datos['telefono']} ,'{$datos['correo']}','{$datos['clave']}', '{$datos['estado']}', '{$datos['rol']}')";

        return $this->ejecutarInsercion($sql);
    }

    public function eliminar($idPersona)
    {
        $sql = "DELETE FROM persona WHERE id_persona = $idPersona";

        return $this->conexion->query($sql);
    }

    public function actualizar($datos, $idPersona)
    {
        $clave = !empty($datos['clave']) ? ", clave = '{$datos['clave']}'" : "";
        $sql = "UPDATE persona SET nombres = '{$datos['nombres']}', apellidos = '{$datos['apellidos']}', telefono = {$datos['telefono']}, correo = '{$datos['correo']}', estado = '{$datos['estado']}' , rol = '{$datos['rol']}'   " . $clave
            . " WHERE id_persona = $idPersona ";

        return $this->conexion->query($sql);
    }

    
    public function validarDatos($correo,$clave)
    {

        $sql="SELECT * FROM persona WHERE correo = '$correo' AND clave = md5('$clave') AND estado = 'ACTIVO'  limit 1";
        $resultado = $this->conexion->query($sql);
        $usuario = $resultado->fetch_all(MYSQLI_ASSOC);

        return $usuario[0] ?? null;
        
    }


}

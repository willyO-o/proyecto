<?php

require_once 'modelos/Conexion.php';

class ModeloPersona extends Conexion{
    
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
    
        public function registrar($datos)
        {
            $sql = "INSERT INTO persona (nombres,apellidos,telefono,email,departamento) VALUES ('{$datos['nombres']}','{$datos['apellidos']}',{$datos['telefono']} ,'{$datos['email']}','{$datos['departamento']}')";
    
            return $this->ejecutarInsercion($sql);
        }
    
        public function eliminar($idPersona)
        {
            $sql = "DELETE FROM persona WHERE id_persona = $idPersona";
    
            return $this->conexion->query($sql);
        }
    
        public function actualizar($datos,$idPersona)
        {
            $sql = "UPDATE persona SET nombres = '{$datos['nombres']}', apellidos = '{$datos['apellidos']}', telefono = {$datos['telefono']}, email = '{$datos['email']}', departamento = '{$datos['departamento']}' WHERE id_persona = $idPersona";
    
            return $this->conexion->query($sql);
            
        }

}
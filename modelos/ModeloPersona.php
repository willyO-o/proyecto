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
            $sql = "INSERT INTO persona (nombres,apellidos,telefono,email,departamento) VALUES ('{$datos['nombre']}','{$datos['apellido']}',{$datos['edad']})";
    
            return $this->ejecutarInsercion($sql);
        }
    
        public function eliminar($idPersona)
        {
            $sql = "DELETE FROM persona WHERE id_persona = $idPersona";
    
            return $this->conexion->query($sql);
        }
    
        public function actualizar($datos,$idPersona)
        {
            $sql = "UPDATE persona SET nombre = '{$datos['nombre']}', apellido = '{$datos['apellido']}', edad = {$datos['edad']} WHERE id_persona = $idPersona";
    
            return $this->conexion->query($sql);
            
        }

}
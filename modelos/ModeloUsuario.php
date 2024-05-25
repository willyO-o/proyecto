<?php
require_once 'modelos/Conexion.php';

class ModeloUsuario extends Conexion{

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function validar_datos($usuario,$clave)
    {

        $sql="SELECT * FROM usuario WHERE usuario = '$usuario' AND clave = md5('$clave') AND estado = 'ACTIVO' ";
        $resultado = $this->conexion->query($sql);
        $usuario = $resultado->fetch_all(MYSQLI_ASSOC);

        return $usuario[0] ?? null;

        
    }


}
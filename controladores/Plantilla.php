<?php
session_start();
class Plantilla
{
    public function ejecutar()
    {
        try {

            $vista = empty($_GET['ruta']) ?  'login' : $_GET['ruta'];

            $rutas = array_keys($GLOBALS['rutas']);

            if (!in_array($vista, $rutas)) {
                throw new Exception('La ruta no existe');
            }

            $contolador = $GLOBALS['rutas'][$vista];
            $controlador = explode('::', $contolador);

            $clase = $controlador[0];
            $metodo = $controlador[1];

            $directorio =  getcwd();

            if (!file_exists($directorio . '/controladores/' . $clase . '.php')) {
                throw new Exception('El controlador no existe');
            }

            include 'controladores/' . $clase . '.php';

            $controlador = new $clase();

            if (!is_callable([$controlador, $metodo])) {
                throw new Exception('El metodo no existe');
            }

            if (empty($_GET["parametro"])) {
                $controlador->$metodo();
            } else {
                $controlador->$metodo($_GET["parametro"]);
            }


        } catch (Exception $e) {
            $mensajeExcepcion= $e->getMessage();

            include 'vistas/404.php';
        }
    }
}

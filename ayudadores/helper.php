<?php

if (!function_exists('url')) {
    function url($ruta = "")
    {
        return BASE_URL . $ruta;
    }
}

if (!function_exists('post')) {
    function post($parametro = null)
    {
        if (empty($parametro)) {
            return $_POST;
        }

        return $_POST[$parametro] ?? null;
    }
}

if (!function_exists('get')) {
    function get($parametro = null)
    {
        $parametrosGet = $_GET;
        unset($parametrosGet["ruta"], $parametrosGet["parametro"]);

        if (empty($parametro)) {
            return $parametrosGet;
        }

        return $parametrosGet[$parametro] ?? null;
    }
}


if (!function_exists('cargarVista')) {
    function cargarVista($archivo, $datos = [])
    {
        extract($datos);

        return include 'vistas/' . $archivo . '.php';
    }
}



if (!function_exists('erroresValidacion')) {
    function erroresValidacion()
    {
        if (empty($_SESSION['error'])) {
            return "";
        }


        $errores = $_SESSION['error'];
        unset($_SESSION['error']);

        $html = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error de Validacion:</strong> <br>';

        foreach ($errores as $error) {
            $html .= "<p class='mb-0'>" . $error . "</p>";
        }

        $html .= ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        return $html;
    }
}

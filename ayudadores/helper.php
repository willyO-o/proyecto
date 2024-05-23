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

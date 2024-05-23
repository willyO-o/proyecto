<?php
const BASE_URL="https://proyecto.local/";

// $rutas=[
//     "registro",
//     "login",
//     "principal",
//     "salir"
// ];


$rutas = [
    'login' => 'Autenticacion::login', 
    'registro' => 'Autenticacion::registro',
    'salir' => 'Autenticacion::salir',

    'principal' => 'Principal::principal',

    'articulo/crear' => 'Articulo::crear',
    'articulo/editar' => 'Articulo::editar',
    'articulo/eliminar' => 'Articulo::eliminar',
    'articulo/ver' => 'Articulo::ver',
    'articulo/listar' => 'Articulo::listar',


    'categoria' => 'Categoria::listar',
    'categoria/crear' => 'Categoria::crear',
    'categoria/registrar' => 'Categoria::registrar',
    'categoria/editar' => 'Categoria::editar',
    'categoria/actualizar' => 'Categoria::actualizar',
    'categoria/eliminar' => 'Categoria::eliminar',
    'categoria/ver' => 'Categoria::ver',
];
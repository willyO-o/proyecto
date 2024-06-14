<?php
const BASE_URL="https://proyecto.local/";




$rutas = [
    'login' => 'Autenticacion::login', 
    'salir' => 'Autenticacion::salir',
    'autenticar' => 'Autenticacion::autenticar',

    'principal' => 'Principal::principal',

    'articulo/crear' => 'Articulo::crear',
    'articulo/editar' => 'Articulo::editar',
    'articulo/eliminar' => 'Articulo::eliminar',
    'articulo/listar' => 'Articulo::listar',
    'articulo' => 'Articulo::listar',
    'articulo/registrar' => 'Articulo::registrar',
    'articulo/actualizar' => 'Articulo::actualizar',
    'articulo/reporte' => 'Articulo::reporte',
    


    'categoria' => 'Categoria::listar',
    'categoria/crear' => 'Categoria::crear',
    'categoria/registrar' => 'Categoria::registrar',
    'categoria/editar' => 'Categoria::editar',
    'categoria/actualizar' => 'Categoria::actualizar',
    'categoria/eliminar' => 'Categoria::eliminar',

    'persona' => 'Persona::listar',
    'persona/crear' => 'Persona::crear',
    'persona/registrar' => 'Persona::registrar',
    'persona/editar' => 'Persona::editar',
    'persona/actualizar' => 'Persona::actualizar',
    'persona/eliminar' => 'Persona::eliminar',


];
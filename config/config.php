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
    'preguntas' => 'Pregunta::preguntas',
    'salir' => 'Usuario::salir',
];
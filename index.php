
<?php

require_once 'config/config.php';
// require_once 'vistas/plantilla.php';
require_once 'controladores/Plantilla.php';

$plantilla = new Plantilla();
$plantilla->ejecutar();

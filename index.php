<?php

require_once 'config/config.php';
require_once 'ayudadores/helper.php';
require_once 'controladores/Plantilla.php';

$plantilla = new Plantilla();
$plantilla->ejecutar();

<?php

ini_set('display_errors', ); // Coloca 0 si no deseas que aparezcan los errores también en el navegador
ini_set("log_errors", 1); // Con esta línea estamos diciendo que queremos crear un nuevo archivo de errores
ini_set("error_log", "/opt/lampp/htdocs/reservas-hotel/backend/php_error_log"); // Cambia "/ruta/a/tu/aplicacion/" por la ruta donde deseas que se guarde el archivo de registro de errores


require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/banner.controlador.php";
require_once "modelos/banner.modelo.php";

require_once "controladores/planes.controlador.php";
require_once "modelos/planes.modelo.php";

require_once "controladores/categorias.controlador.php";
require_once "modelos/categorias.modelo.php";

require_once "controladores/recorrido.controlador.php";
require_once "modelos/recorrido.modelo.php";

require_once "controladores/restaurante.controlador.php";
require_once "modelos/restaurante.modelo.php";

require_once "controladores/habitaciones.controlador.php";
require_once "modelos/habitaciones.modelo.php";

require_once "controladores/reservas.controlador.php";
require_once "modelos/reservas.modelo.php";

require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";

require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

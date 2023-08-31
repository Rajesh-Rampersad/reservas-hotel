<?php
ini_set('display_errors', 1); // Coloca 0 si no deseas que aparezcan los errores también en el navegador
ini_set("log_errors", 1); // Con esta línea estamos diciendo que queremos crear un nuevo archivo de errores
ini_set("error_log", "/opt/lampp/htdocs/reservas-hotel/php_error_log"); // Cambia "/ruta/a/tu/aplicacion/" por la ruta donde deseas que se guarde el archivo de registro de errores


require_once "controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
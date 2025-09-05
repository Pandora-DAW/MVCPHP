<?php 

/**
 * Inicia las sesiones HTTP para poder guardar variables en la sesión y mantener estado entre una páginas y otras.
 */

session_start();

/**
 * Cargamos mos ficheros PHP necesarios
 */

require_once('../config/Database.php');
require_once('../config/Router.php');

/**
 * Obtenemos la conexión a la BBDD
 */

$bd = Database::getInstancia();

/**
 * Obtenemos la URI de la petición HTTP
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $uri;

Router::enrutar($uri,$bd);

?>
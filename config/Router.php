<?php

/**
 * Clase auxiliar que se encarga de que el controlador al que se invoca con cada url que se introduzca en el navegador funcione
 */

class Router {
    // Registro usuarios
    public static function enrutar($uri, $bd) {
        switch ($uri) {
            case '/registro':
                 require_once('app/controladores/UsuarioController.php');
                 $controlador= new UsuarioController($bd);
                 $controlador->mostrar_registro();
                break;
            
            default:
                http_response_code(404);
                echo "<h2> 404 - Página no encontrada </h2>";
                break;
        }
    }
}
?>
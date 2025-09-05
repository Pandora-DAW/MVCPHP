<?php
require_once('app/modelos/Usuario.php');

class UsuarioController {
    private $bd;

    public function __construct($bd)
    {
        $this->bd=$bd;
    }

    /**
     * El controlador es el nexo de unión entre el modelo y la vista. De tal forma que será el encargado de invocar al modelo para recouperar los datos de la base de datos y enviarlos a la vista para que se encargue de mostrarlos
     */

/**
 * Función del controlador que muestra el registro de usuario
 */

    public function mostrar_registro() {
        $vista= 'app/vistas/usuarios/registro.php';
        require('app/vistas/layout.php');
    }
}




?>
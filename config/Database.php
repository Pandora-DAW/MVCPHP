<?php
define('HOST','localhost');
define('PORT', '3306');
define('DBNAME', 'tienda_web');
define('USER', 'admin_tienda');
define('PASSWORD', 'C1234¡');

class Database {

    private static $instanciaBD =null;
    private $bd;

    private function __construct(){
        $this->bd = new PDO(
            'mysql:'.HOST.':'.PORT.';dbname='.DBNAME,USER, PASSWORD);

    }

    public static function getInstancia() {
        if (self::$instanciaBD=== null) {
            self::$instanciaBD = new Database();
        }
        return self::$instanciaBD->bd;
    }
    
}



?>
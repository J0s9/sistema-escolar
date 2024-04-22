<?php
define('SERVIDOR', 'localhost');
define('USUARIO', 'postgres');
define('PASSWORD', '123');
define('BD', 'gestionescolar');

define('APP_NAME', 'SISTEMA DE GESTION ESCOLAR');
define('APP_URL', 'http://localhost/sistemaescolar');
define('KEY_API_MAPS', '');

$servidor = "pgsql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, username:USUARIO, password:PASSWORD);
    // echo "Conexion Exitosa en la base de datos";
} catch (Exception $e) {
    echo "NO SE PUDO ACCEDER A LA BASE DE DATOS POR :".$e;
}

date_default_timezone_set('America/Asuncion');
$fecha_hora   = date (format:'Y-m-d H:i:s');
$fecha_actual = date(format:'Y-m-d');
$dia_actual   = date(format:'d');
$mes_actual   = date(format:'m');
$anio_actual  = date(format:'Y');

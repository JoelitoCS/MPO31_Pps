<?php
$host = 'mysql-adaw.alwaysdata.net';
$dbname = 'adaw_gestor_notas_uab';
$username = 'adaw';
$password = '16082006jcs';

ini_set('display_errors', 1);
error_reporting(E_ALL);
echo "Probando conexion a la base de datos...<br>";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error){
    die("Error de conexión: " . $mysqli->connect_error);
}//else{
    //echo "Conexion existosa a la base de datos gestor_notas_uab";
//}
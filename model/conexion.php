<?php
 try {
     //code...
    $manejador = 'mysql';
    $servidor = 'localhost';
    $base = 'integracion';
    $usuario = 'root';
    $pass = '';


    $cadena = '$manejador:host=$servidor;dbnane=$base'M_1_PI

    $cnx = new PDO($cadena, $usuario, $pass, array(
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    ));



 } catch (\Throwable $th) {
     throw $th;
 }

?>
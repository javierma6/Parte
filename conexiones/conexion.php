<?php

// Carga la configuración

$config = parse_ini_file('datosConexion.ini');


//Conexión con los datos del 'config.ini'

//Método mysqli

$conexion = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);


// Comprobamos conexion

if ($conexion===false) {

   echo 'ERROR: '.mysqli_connect_error();
}


?>
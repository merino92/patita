<?php

$hola;

function Conectar(){

$con;

  $parametros=file_get_contents("../configuracion.json");//obtengo el json guardado en el archivo configuracion.json
  //decodifica el json_decode
  $datos=json_decode($parametros,true);

  $db=$datos["dbname"];
  $host=$datos["host"];
  $usuario=$datos['usuario'];
  $p=$datos['password'];
$cadena="mysql:host=$host;dbname=$db";

  $conexion= new PDO($cadena,$usuario,$p);

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $conexion;



}



 ?>

<?php
require_once '../conexion/conexion.php';


class arg_login { // clase Login


 function cargarLogin($usuario,$clave){


  $conexion = Conectar();
  $sql = "select * from usuarios where usuario=:usuario and clave=:clave";
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':usuario', $usuario);
  $statement->bindParam(':clave', $clave);
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);
  $res=$statement->fetchAll();
  return $res;



}//ciere de la funcion



}


 ?>

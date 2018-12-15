<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Entradas { // clase entrdas

  function ListarEntradas(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from entradas";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion

  //Insertar
  //function Insertar(data)
  function InsertarEntradas($identradas, $idproducto, $cantidad, $fecha_entrada, $usuario_ingreso){
   $conexion = Conectar();
   $sql = "INSERT INTO entradas (identradas, idproducto, cantidad, fecha_entrada, usuario_ingreso) VALUES (:identradas, :idproducto, :cantidad, :fecha_entrada, :usuario_ingreso) ";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':identradas', $identradas);
   $statement->bindParam(':idproducto', $idproducto);
   $statement->bindParam(':cantidad', $cantidad);
   $statement->bindParam(':fecha_entrada', $fecha_entrada);
   $statement->bindParam(':usuario_ingreso', $usuario_ingreso);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }

  //function Actuzalizar(data)
  function ActualizarEntradas($identradas, $idproducto, $cantidad, $fecha_entrada, $usuario_ingreso){
   $conexion = Conectar();
   $sql = "UPDATE entradas SET idproducto=:idproducto and existencias=:existencias";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':identradas', $identradas);
   $statement->bindParam(':idproducto', $idproducto);
   $statement->bindParam(':cantidad', $cantidad);
   $statement->bindParam(':fecha_entrada', $fecha_entrada);
   $statement->bindParam(':usuario_ingreso', $usuario_ingreso);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion

  //Eliminar
  //function Eliminar(data)
  function EliminarEntradas($identradas){
   $conexion = Conectar();
   $sql = "DELETE FROM entradas WHERE id=:id";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':identradas', $identradas);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion





}


 ?>

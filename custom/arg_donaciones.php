<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Donaciones { // clase Catoria

  function ListarInventarios(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from inventario";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion

  //Insertar
  //function Insertar(data)
  function InsertarInventarios($idproducto, $existencias){
   $conexion = Conectar();
   $sql = "INSERT INTO inventario (idproducto, existencias) VALUES (:idproducto, :existencias) ";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':idproductos', $idproductos);
   $statement->bindParam(':existencias', $existencias);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }

  //function Actuzalizar(data)

  function ActuzalizarInventarios($idproductos, $existencias){
   $conexion = Conectar();
   $sql = "UPDATE inventario SET idproducto=:idproducto and existencias=:existencias";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':idproductos', $idproductos);
   $statement->bindParam(':existencias', $existencias);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion

  //Eliminar
  //function Eliminar(data)
  function EliminarInventarios($idinventario){
   $conexion = Conectar();
   $sql = "DELETE FROM inventario WHERE id=:id";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':idinventario', $idinventario);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion





}


 ?>

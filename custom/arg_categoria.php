<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Categorias { // clase Catoria

  public funtion ListarCategorias(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from categorias";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion

  public funtion InsetarCategorias($idcategorias){
  $modelo = new Conexion();
  $conexion = $modelo->Conectar();
  $sql = "insert into categorias(idcategorias, categorias) values(:idcategorias, :categorias);"
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':idcategorias', $idcategorias);
  $statement->bindParam(':categorias', $categorias);
  $statement->execute();
          if (!$statement) {
            return "error al crear el registro";
          }else {

            return "registro creado correctamente";
          }//cierre del else
  }//cierre de funcion
}
 ?>

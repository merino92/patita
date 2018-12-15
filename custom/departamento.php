<?php
require_once '../conexion/conexion.php'; //conexion con la base de datos

class departamento { //clase departamento

  function insetardepartamento($iddepartamentos, $departamento, $co_postal){
  $conexion = Conectar();
  $sql = "insert into Departamento(iddepartamentos,departamento, co_postal) values(:iddepartamentos, :departamento, :co_postal);";
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':iddepartamentos', $iddepartamentos);
  $statement->bindParam(':departamento', $departamento);
  $statement->bindParam(':co_postal', $co_postal);
  $statement->execute();
          if (!$statement) {
            return ;

          }else {

            return "registro creado correctamente";
          }//cierre del else
  }//cierre de funcion



   function cargardepartamento(){
  $rows = null;
  $conexion = Conectar();
  $sql = "select * from departamentos where borrado=false;";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  $result = $statement->fetchAll();
  return $result;//
}



}

 ?>

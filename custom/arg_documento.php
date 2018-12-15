<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Documento{ //clase Documento

  public funtion ListarDocumentos(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from documentos";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion


   function InsetarDocumentos($data){
  $modelo = new Conexion();
  $conexion = $modelo->Conectar();
  $sql = "insert into documentos(iddocumento, documento) values(:iddocumento, :documento);"
    $statement = $conexion->prepare($sql);
      $statement->bindParam(':iddocumento', $data['iddocumento']);
        $statement->bindParam(':documento', $data['documento']);
        $statement->execute();
          if (!$statement) {
            return "error al crear el registro";
          }else {

            return "registro creado correctamente";
          }//cierre del else
  }//cierre de funcion

  //function Actuzalizar(data)
  function ActualizarDocumentos($iddocumento,$documento){
   $conexion = Conectar();
   $sql = "UPDATE documentos SET iddocumento=:iddocumento and documento=:documento";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':iddocumento', $iddocumento);
   $statement->bindParam(':documento', $documento);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion


//Eliminar
//function Eliminar(data)
function EliminarDocumentos($idadopcion){
 $conexion = Conectar();
 $sql = "DELETE FROM documentos WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':iddocumento', $iddocumento);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion
}

 ?>

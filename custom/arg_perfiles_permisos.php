<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class perfil_permiso{ //clase perfil

  public funtion ListarPerfil_permiso(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from perfil_permiso";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion


 function InsetarPerfil_permiso($data){
  $modelo = new Conexion();
  $conexion = $modelo->Conectar();
  $sql = "insert into perfiles_permiso(idperfil, pefil) values(:idperfil, :perfil);"
    $statement = $conexion->prepare($sql);
      $statement->bindParam(':idperfil', $data['idperfil']);
        $statement->bindParam(':perfil', $data['perfil']);
        $statement->execute();
          if (!$statement) {
            return "error al crear el registro";
          }else {

            return "registro creado correctamente";
          }//cierre del else
  }//cierre de funcion

  //function Actuzalizar(data)
  function ActualizarPerfil_permiso($idperfil,$perfil){
   $conexion = Conectar();
   $sql = "UPDATE perfiles_permiso SET idperfil=:idperfil and perfil=:perfil";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':idperfil', $idperfil);
   $statement->bindParam(':perfil', $perfil);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion


//Eliminar
//function Eliminar(data)
function EliminarPerfil_permiso($idperfil){
 $conexion = Conectar();
 $sql = "DELETE FROM perfiles_permiso WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idperfil', $idperfil);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion
}

 ?>

<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Configuraciones{ //clase configuracion

  public funtion ListarConfiguraciones(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from configuraciones";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion

//autualizar
//function Actuzalizar(data)
function ActualizarConfiguraciones($idconfiguraciones, $nombre_institucion,  $iddepartamento, $idmunicipio, $direccion, $telefono, $correo, $encargado, $logo){
 $conexion = Conectar();
 $sql = "UPDATE configuraciones SET idconfiguraciones=:idconfiguraciones and nombre_institucion=:nombre_institucion  and iddepartamento=:iddepartamento  and idmunicipio=:idmunicipio  and direccion=:direccion  and telefono=:telefono  and correo=:correo  and encargado=:encargado  and logo=:logo";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idconfiguraciones', $idconfiguraciones);
 $statement->bindParam(':nombre_institucion', $nombre_institucion);
 $statement->bindParam(':iddepartamento', $iddepartamento);
 $statement->bindParam(':idmunicipio', $idmunicipio);
 $statement->bindParam(':direccion', $direccion);
 $statement->bindParam(':telefono', $telefono);
 $statement->bindParam(':correo', $correo);
 $statement->bindParam(':encargado', $encargado);
 $statement->bindParam(':logo', $logo);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion

//Eliminar
//function Eliminar(data)
function EliminarConfiguraciones($idconfiguraciones, $nombre_institucion,  $iddepartamento, $idmunicipio, $direccion, $telefono, $correo, $encargado, $logo){
 $conexion = Conectar();
 $sql = "DELETE FROM configuraciones WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idconfiguraciones', $idconfiguraciones);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion

//Imsertar
//function Insertar(data)
function InsertarConfiguraciones($idconfiguraciones, $nombre_institucion,  $iddepartamento, $idmunicipio, $direccion, $telefono, $correo, $encargado, $logo){
 $conexion = Conectar();
 $sql = "INSERT INTO configuraciones (idconfiguraciones, nombre_institucion,  iddepartamento, idmunicipio, direccion, telefono, correo, encargado, logo) VALUES (:idconfiguraciones, :nombre_institucion,  :iddepartamento, :idmunicipio, :direccion, :telefono, :correo, :encargado, :logo) ";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idconfiguraciones', $idconfiguraciones);
 $statement->bindParam(':nombre_institucion', $nombre_institucion);
 $statement->bindParam(':iddepartamento', $iddepartamento);
 $statement->bindParam(':idmunicipio', $idmunicipio);
 $statement->bindParam(':direccion', $direccion);
 $statement->bindParam(':telefono', $telefono);
 $statement->bindParam(':correo', $correo);
 $statement->bindParam(':encargado', $encargado);
 $statement->bindParam(':logo', $logo);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}
}

 ?>

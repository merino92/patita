<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Mascotas{ //clase mascotas

  public funtion ListarMascotas(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from mascotas";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion

<<<<<<< HEAD
//autualizar
//function Actuzalizar(data)
function ActualizarMascotas($nombre_mascota, $idgenero, $idraza, $sexo, $tipo_sangre, $color, $fecha_creo, $usuario_creo){
=======


//autualizar
//function Actuzalizar(data)
function ActuzalizarMascotas($nombre_mascota, $idgenero, $idraza, $sexo, $tipo_sangre, $color, $fecha_creo, $usuario_creo){
>>>>>>> origin/master
 $conexion = Conectar();
 $sql = "UPDATE mascotas SET nombre_mascota=:nombre_mascota and idgenero=:idgenero  and idraza=:idraza  and sexo=:sexo  and tipo_sangre=:tipo_sangre  and color=:color  and fecha_creo=:fecha_creo  and usuario_creo=:usuario_creo";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':nombre_mascota', $nombre_mascota);
 $statement->bindParam(':idgenero', $idgenero);
 $statement->bindParam(':idraza', $idraza);
 $statement->bindParam(':sexo', $sexo);
 $statement->bindParam(':tipo_sangre', $tipo_sangre);
 $statement->bindParam(':color', $color);
 $statement->bindParam(':fecha_creo', $fecha_creo);
 $statement->bindParam(':usuario_creo', $usuario_creo);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion

//Eliminar
//function Eliminar(data)
function EliminarMascotas($nombres, $primer_apellido, $segundo_apellido, $fehca_nacimiento, $lugar_nacimiento, $iddepartamento, $idmunicipio,  $telefono_casa, $celular, $direccion, $foto){
 $conexion = Conectar();
 $sql = "DELETE FROM padrinos WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idpadrinos', $idpadrinos);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion

//Imsertar
//function Insertar(data)
function InsertarMascotas($nombres, $primer_apellido, $segundo_apellido, $fehca_nacimiento, $lugar_nacimiento, $iddepartamento, $idmunicipio,  $telefono_casa, $celular, $direccion, $foto){
 $conexion = Conectar();
 $sql = "INSERT INTO padrinos (nombres, primer_apellido, segundo_apellido, fehca_nacimiento, lugar_nacimiento, iddepartamento, idmunicipio,  telefono_casa, celular, direccion, foto) VALUES (:nombres, :primer_apellido, :segundo_apellido, :fehca_nacimiento, :lugar_nacimiento, :iddepartamento, :idmunicipio, :telefono_casa, :celular, :direccion, :foto) ";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':nombres', $nombres);
 $statement->bindParam(':primer_apellido', $primer_apellido);
 $statement->bindParam(':segundo_apellido', $segundo_apellido);
 $statement->bindParam(':fehca_nacimiento', $fehca_nacimiento);
 $statement->bindParam(':lugar_nacimiento', $lugar_nacimiento);
 $statement->bindParam(':iddepartamento', $iddepartamento);
 $statement->bindParam(':idmunicipio', $idmunicipio);
 $statement->bindParam(':telefono_casa', $telefono_casa);
 $statement->bindParam(':celular', $celular);
 $statement->bindParam(':foto', $foto);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//c




}

 ?>

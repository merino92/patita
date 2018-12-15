<?php
include ('../../conexion/conexion.php'); //conexion con la base de datos

class Padrino{ //clase Padrino

  function ListarPadrino(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from padrinos";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }


function InsertarPadrino($data)
$conexion = Conectar();
$sql = "call InsertarPadrino(:nombre,:primer_apellido,:segundo_apellido,:fecha_nacimiento,
        :iddepartamento,:idmunicipio,:tel_casa,:celular,direccion,:lugar_nacimiento,@res)";
$statement = $conexion->prepare($sql);
$statement->bindParam(':nombres', $data['nombres']);
$statement->bindParam(':primer_apellido', $data['primer_apellido']);
$statement->bindParam(':segundo_apellido', $data['segundo_apellido']);
$statement->bindParam(':fecha_nacimiento', $data['fecha_nacimiento']);
$statement->bindParam(':lugar_nacimiento', $data['lugar_nacimiento']);
$statement->bindParam(':iddepartamento', $data['iddepartamento']);
$statement->bindParam(':idmunicipio', $data['idmunicipio']);
$statement->bindParam(':telefono_casa', $data['tel_casa']);
$statement->bindParam(':celular', $data['celular']);
$statement->execute();
$statement->closeCursor();
$dato=$conexion->query('select @res as respuesta')->fetch(PDO::FETCH_ASSOC);
return $dato['respuesta'];
}

function ActualizarPadrino($data){
  $conexion = Conectar();
  $sql = "UPDATE padrinos SET nombres=:nombres and primer_apellido=:primer_apellido  and segundo_apellido=:segundo_apellido  and fecha_nacimiento=:fecha_nacimiento  and lugar_nacimiento=:lugar_nacimiento  and iddepartamento=:iddepartamento  and idmunicipio=:idmunicipio  and telefono_casa=:telefono_casa  and celular=:celular  and foto=:foto  and clave=:clave ";
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':nombres', $data['nombres']);
  $statement->bindParam(':primer_apellido', $data['primer_apellido']);
  $statement->bindParam(':segundo_apellido', $data['segundo_apellido']);
  $statement->bindParam(':fehca_nacimiento', $data['fecha_nacimiento']);
  $statement->bindParam(':lugar_nacimiento', $data['lugar_nacimiento']);
  $statement->bindParam(':iddepartamento', $data['iddepartamento']);
  $statement->bindParam(':idmunicipio', $data['idmunicipio']);
  $statement->bindParam(':telefono_casa', $data['tel_casa']);
  $statement->bindParam(':celular', $data['celular']);
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);
  $res=$statement->fetchAll();
  return $res;

}//ciere de la funcion

//function Eliminar(data)
function EliminarPadrino($idpadrinos){
 $conexion = Conectar();
 $sql = "DELETE FROM padrinos WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idpadrinos',$idpadrinos );
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion



 ?>

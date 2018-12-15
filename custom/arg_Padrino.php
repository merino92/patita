<?php
require_once '../../conexion/conexion.php'; //conexion con la base de datos

class Padrino{ //clase Padrino

  function ListarPadrino(){
  $rows = null;

  $conexion =Conectar();
  $sql = "select * from padrinos where borrado=false";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);
  $res=$statement->fetchAll();
  return $res;

}
function InsertarPadrino($data){
$conexion = Conectar();
$nombres=$data['nombres'];
$pa=$data['primer_apellido'];
$sa=$data["segundo_apellido"];
$depar=$data['iddepartamento'];
$muni=$data['idmunicipio'];
$tc=$data["email"];
$cel=$data["celular"];
$dir=$data['direccion'];
$edad=$data['edad'];
$code=$data['codigo'];
$sql = "call Ingresar_padrino(:nombre,:primer_apellido,:segundo_apellido,
        :iddepartamento,:idmunicipio,:correo,:celular,:direccion,:edad,:codigo,@res)";
$statement = $conexion->prepare($sql);
$statement->bindParam(':nombre', $nombres);
$statement->bindParam(':primer_apellido', $pa);
$statement->bindParam(':segundo_apellido', $sa);
$statement->bindParam(':iddepartamento', $depar);
$statement->bindParam(':idmunicipio', $muni);
$statement->bindParam(':correo', $tc);
$statement->bindParam(':celular', $cel);
$statement->bindParam(':direccion', $dir);
$statement->bindParam(':edad', $edad);
$statement->bindParam(':codigo', $code);
$statement->execute();
$statement->closeCursor();
$dato=$conexion->query('select @res as respuesta')->fetchAll(PDO::FETCH_ASSOC);
return $dato;
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

}?>

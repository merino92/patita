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
  $idpadrinos=$data['idpadrinos'];
  $sql = "call update_padrino(:nombre,:primer_apellido,:segundo_apellido,
          :iddepartamento,:idmunicipio,:correo,:celular,:direccion,:edad,:codigo,:id,@res)";
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
  $statement->bindParam(':id', $idpadrinos);
  $statement->execute();
  $statement->closeCursor();
  $dato=$conexion->query('select @res as respuesta')->fetchAll(PDO::FETCH_ASSOC);
  return $dato;

}//ciere de la funcion

//function Eliminar(data)
function EliminarPadrino($data){
  $idpadrinos=$data['id'];
 $conexion = Conectar();
 $sql = "call elimina_padrino(:idpadrinos,@res)";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idpadrinos',$idpadrinos );
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $statement->closeCursor();
 $dato=$conexion->query('select @res as respuesta')->fetchAll(PDO::FETCH_ASSOC);
 return $dato;
}//ciere de la funcion

function Listid($id){
  $conexion = Conectar();
  $sql = "SELECT * FROM padrinos WHERE idpadrinos=:idpadrinos";
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':idpadrinos',$id );
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);
  $res=$statement->fetchAll();

  return $res;
}

}?>

<?php

session_start();

include( '../custom/arg_voluntariados.php');
require_once '../conexion/conexion.php';

$data=json_decode(file_get_contents('php://input'),true);
$i=new arg_Padrino();
$j=$data[''];

$res=$i->ListarVoluntariados($data($res)>0){

include( '../custom/Voluntariados.php');
require_once '../conexion/conexion.php';

$data=json_decode(file_get_contents('php://input'),true);
$i=new Voluntariados();

if(sizeof($data)>0){

}else{

  if(isset($_SESSION['usuario'])){
        session_destroy();
        header('Location: ../vistas/login/login.php');

  }else{
        header('Location: ../vistas/Voluntariados/index.php');
  }
}

//autualizar
//function Actuzalizar(data)
function ActuzalizarVoluntariados($nombres, $primer_apellido, $segundo_apellido, $fehca_nacimiento, $lugar_nacimiento, $iddepartamento, $idmunicipio,  $telefono_casa, $celular, $direccion, $foto){
 $conexion = Conectar();
 $sql = "UPDATE voluntariados SET nombres=:nombres and primer_apellido=:primer_apellido  and segundo_apellido=:segundo_apellido  and fecha_nacimiento=:fecha_nacimiento  and lugar_nacimiento=:lugar_nacimiento  and iddepartamento=:iddepartamento  and idmunicipio=:idmunicipio  and telefono_casa=:telefono_casa  and celular=:celular  and foto=:foto  and clave=:clave ";
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
}//ciere de la funcion

//Eliminar
//function Eliminar(data)
function EliminarVoluntariados($nombres, $primer_apellido, $segundo_apellido, $fehca_nacimiento, $lugar_nacimiento, $iddepartamento, $idmunicipio,  $telefono_casa, $celular, $direccion, $foto){
 $conexion = Conectar();
 $sql = "DELETE FROM voluntariados WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idpadrinos', $idpadrinos);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion

//Imsertar
//function Insertar(data)
function InsertarVoluntariados($nombres, $primer_apellido, $segundo_apellido, $fehca_nacimiento, $lugar_nacimiento, $iddepartamento, $idmunicipio,  $telefono_casa, $celular, $direccion, $foto){
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
}
$res=$i->ListarVoluntariados($data($res)>0){


echo json_encode($res);

}else{
  session_destroy();
  echo json_encode($res);

}

?>

<?php

require_once '../conexion/conexion.php';
class Municipio {

function ListarMunicipio(){
$con=Conectar();
$sql='CALL listar_municipio';
$data=$con->prepare($sql);
$data->execute();
$data->setFetchMode(PDO::FETCH_ASSOC);
$res=$data->fetchAll();
return $res;

}

function InsertarMunicipio($data){
$muni=$data['municipio'];
$depar=$data['iddepartamento'];
$con=Conectar();
$sql='call insertarMunicipio(:nombre,:departamento,@dato)';
$data=$con->prepare($sql);
$data->bindParam(":nombre",$muni);
$data->bindParam(":departamento",$depar);
$data->execute();
$data->closeCursor();
$res=$con->query('select @dato as respuesta')->fetchAll();
return $res;
}
function ListarId($id){
  $con=Conectar();
  $sql='select * from municipios where idmunicipios=:id';
  $data=$con->prepare($sql);
  $data->bindParam(":id",$id);
  $data->execute();
  $data->setFetchMode(PDO::FETCH_ASSOC);
  $res=$data->fetchAll();
  return $res;

}

function UpdateMunicipio($data){
$muni=$data['municipio'];
$depar=$data['iddepartamento'];
$munid=$data['idmunicipios'];
$con=Conectar();
$sql='call update_municipio(:idmuni,:municipio,:iddepar,@dato)';
$data=$con->prepare($sql);

$data->bindParam(":iddepar",$depar);
$data->bindParam(":municipio",$muni);
$data->bindParam(":idmuni",$munid);
$data->execute();
$data->closeCursor();
$res=$con->query('select @dato as respuesta')->fetchAll();
return $res;
}


}

 ?>

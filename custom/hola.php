<?php

include('../conexion/conexion.php');

class consultas{

function insetardepartamento($iddepartamentos, $departamento, $co_postal){
$modelo = new conexion();
$conexion = $modelo->Conectar();
$sql = "insert into Departamento(iddepartamentos, departamento, co_postal) values(:iddepartamentos, :departamento, :co_postal);";
$statement = $conexion->prepare($sql);
$statement->bindParam(':iddepartamentos', $iddepartamentos);
$statement->bindParam(':departamento', $departamento);
$statement->bindParam(':co_postal', $co_postal);
$statement->execute();
        if (!$statement) {
          return "error al crear el registro";
        }else {

          return "registro creado correctamente";
        }
}

function cargardepartamento(){
$rows = null;
$modelo = new conexion();
$conexion =$modelo->Conectar();

$sql = "select * from departamentos";
$statement = $conexion->prepare($sql);
$statement->execute();
while ($result = $statement->fetch()){
$rows[] = $result;

}
return $rows;
}

}
?>

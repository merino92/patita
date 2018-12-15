<?php

include ('../conexion/conexion.php');
class Adopcion {
$conexion=new Conexion();
$clase= new Consultas();

function ListarDepartamentos(){
return json_encode($clase->Listardepartamentos());
}
}

 ?>

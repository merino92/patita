<?php

include ('../conexion/conexion.php');
class Adopciones {
$conexion=new Conexion();
$clase= new Consultas();

function ListarAdopciones(){
return json_encode($clase->ListarAdopciones());
}
}

 ?>

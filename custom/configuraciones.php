<?php

include ('../conexion/conexion.php');
class Configuraciones {
$conexion=new Conexion();
$clase= new Configuraciones();

function ListarConfiguraciones(){

return json_encode($clase->ListarConfiguraciones());
}
}

 ?>

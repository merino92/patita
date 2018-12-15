<?php

include ('../conexion/conexion.php');
class Documento {
$conexion=new Conexion();
$clase= new Documento();

function ListarDocumentos(){

return json_encode($clase->ListarDocumentos());
}
}

 ?>

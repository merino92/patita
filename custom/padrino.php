<?php

include ('../conexion/conexion.php');
class Padrino {
$conexion=new Conexion();
$clase= new Padrino();

function ListarPadrino(){


return json_encode($clase->ListarPadrino());


}



}

 ?>

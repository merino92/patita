<?php

include ('../conexion/conexion.php');
class Donaciones {
$conexion=new Conexion();
$clase= new Inventarios();

function ListarInventarios(){


return json_encode($clase->ListarInventarios());


}



}

 ?>

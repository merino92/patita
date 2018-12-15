<?php

include ('../conexion/conexion.php');
class Mascotas {
$conexion=new Conexion();
$clase= new Mascotas();

function ListarMascotas(){


return json_encode($clase->ListarMascotas());


}



}

 ?>

<?php

include ('../conexion/conexion.php');
class voluntariados {
$conexion=new Conexion();
$clase= new Voluntariados();

function ListarVoluntariados(){


return json_encode($clase->ListarVoluntariados());


}



}

 ?>

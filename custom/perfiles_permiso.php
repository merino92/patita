<?php

include ('../conexion/conexion.php');
class perfil_permiso {
$conexion=new Conexion();
$clase= new perfil_permiso();

function ListarPerfil_permiso(){
return json_encode($clase->ListarPerfil_permiso());

}
}

 ?>

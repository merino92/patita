<?php

include ('../conexion/conexion.php');
class Entradas {
$conexion=new Conexion();
$clase= new Entradas();

function ListarEntradas(){
return json_encode($clase->ListarEntradas());

}
}

 ?>

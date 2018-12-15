<?php

include (../../conexion/conexion.php);
class Categorias {
$conexion=new Conexion();
$clase= new Consultas();

function ListarCategorias(){

return json_encode($clase->ListarCategorias());

}
}

 ?>

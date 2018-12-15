<?php

session_start();
include( '../custom/arg_login.php');
require_once '../conexion/conexion.php';
$data=json_decode(file_get_contents('php://input'),true);
$i=new arg_login();
$j=$data['usuario'];
$res=$i->cargarLogin($data['usuario'],$data["clave"]);
if(sizeof($res)>0){

$_SESSION['usuario']=$j;
$_SESSION['prueba']="holamundo";

echo json_encode($res);

}else{
  session_destroy();
  echo json_encode($res);

}




?>

<?php

include ('../conexion/conexion.php');
include ('../custom/arg_login.php');
class Login {
//$conexion=new Conexion();
$clase= new arg_login();



function Listarlogin($usr,$clave){

  $res=$clase->cargarLogin($usr,$clave);
  if($res.length > 0){
    session_start();
    $_SESSION["usuario"]=$usr;
    return json_encode($res);
  }else{
    return json_encode($res);

  }

}

 ?>

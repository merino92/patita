<?php
session_start();
$variable=json_decode(file_get_contents('php://input'),true);

if(isset($_SESSION['usuario'])){
if(sizeof($variable)==0){

  header('Location: ../vistas/inicio/index.php');
}else{

}
}else{
      header('Location: ../vistas/login/login.php'); //retorna al login en caso no haya session
}
 ?>

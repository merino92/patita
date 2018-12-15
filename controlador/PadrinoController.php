<?php

session_start();
require_once '../custom/arg_Padrino.php';

$json=null;
$variable=null;
if($_SERVER['REQUEST_METHOD'] == 'GET'){

  $variable=$_GET['funcion'];

}else{

$json=json_decode(file_get_contents('php://input'),true);
$variable=$json['funcion'];

}//verifica
//include('../custom/padrino.php');
//require_once '../conexion/conexion.php';


$i=new Padrino();

if(!isset($_SESSION['usuario'])){
  header('Location: ../vistas/login/login.php'); //retorna al login en caso no haya session
}else{
if(sizeof($variable)==0){

}else{
  switch ($variable) {
    case 1:

          echo json_encode($i->ListarPadrino());


      break; //listar
      case 2:

      echo json_encode($i->InsertarPadrino($json));

      break;//insertar
      case 3:

        echo json_encode($i->ActualizarPadrino($json));

      break;
      case 4:


        echo json_encode($i->EliminarPadrino($json));



      break;
    default:
      // code...
      break;
}
}
}
?>

<?php

session_start();
function VerificarSesion(){

  if(!isset($_SESSION))
  {
        return True;

  }else
  {
      return False;
  }

}

include('../custom/categoria.php');
include('../custom/arg_categoria.php');
require_once '../conexion/conexion.php';
$i=new arg_categoria();
$data=json_decode(file_get_contents('php://input'),true);
$i=new Categoria();

if(sizeof($data)>0){

$funcion=$data['funcion'];

switch ($funcion) {
  case 1:
        $sesion=VerificarSesion();
        if($session==True){
          echo json_enconde($i->ListarCategorias());
        }else{
          session_destroy();
          header('Location: ../vistas/login/login.php');
        }

    break; //listar
    case 2:
    $sesion=VerificarSesion();
    if($session==True){
    echo json_enconde($i->InsertarCategorias($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;//insertar
    case 3:


    break;
    case 4:



    break;
  default:
    // code...
    break;
}


}else{

  if(isset($_SESSION['usuario'])){
        session_destroy();
        header('Location: ../vistas/login/login.php');

  }else{
        header('Location: ../vistas/Categorias/index.php');
  }
}



?>

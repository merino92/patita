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

include('../custom/entradas.php');
include('../custom/arg_entradas.php');
require_once '../conexion/conexion.php';
$i=new arg_entradas();
$data=json_decode(file_get_contents('php://input'),true);
$i=new Entradas();

if(sizeof($data)>0){

$funcion=$data['funcion'];

switch ($funcion) {
  case 1:
        $sesion=VerificarSesion();
        if($session==True){
          echo json_enconde($i->ListarEntradas());
        }else{
          session_destroy();
          header('Location: ../vistas/login/login.php');
        }

    break; //listar
    case 2:
    $sesion=VerificarSesion();
    if($session==True){
    echo json_enconde($i->InsertarEntradas($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;//insertar
    case 3:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->ActualizarEntradas($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;
    case 4:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->EliminarEntradas($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }


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
        header('Location: ../vistas/Donaciones/index.php');
  }
}



?>

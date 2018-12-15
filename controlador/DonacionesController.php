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

include('../custom/Donaciones.php');
include('../custom/arg_donaciones.php');
require_once '../conexion/conexion.php';
$i=new arg_Donaciones();
$data=json_decode(file_get_contents('php://input'),true);
$i=new Donaciones();

if(sizeof($data)>0){

$funcion=$data['funcion'];

switch ($funcion) {
  case 1:
        $sesion=VerificarSesion();
        if($session==True){
          echo json_enconde($i->ListarInventarios());
        }else{
          session_destroy();
          header('Location: ../vistas/login/login.php');
        }

    break; //listar
    case 2:
    $sesion=VerificarSesion();
    if($session==True){
    echo json_enconde($i->InsertarInventarios($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;//insertar
    case 3:
    $sesion=VerificarSesion();
    if($session==True){
<<<<<<< HEAD
      echo json_enconde($i->ActualizarInventarios($data));
=======
      echo json_enconde($i->ActuzalizarInventarios($data));
>>>>>>> db02e2d451a9c419f42767fee96f29c9421042ab
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;
    case 4:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->EliminarInventarios($data));
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

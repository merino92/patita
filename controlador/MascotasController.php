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


$res=$i->ListarMascotas($data($res)>0){

}


include('../custom/mascotas.php');
include('../custom/arg_mascotas.php');
require_once '../conexion/conexion.php';
$i=new arg_mascotas();
$data=json_decode(file_get_contents('php://input'),true);
$i=new mascotas();

if(sizeof($data)>0){

$funcion=$data['funcion'];

switch ($funcion) {
  case 1:
        $sesion=VerificarSesion();
        if($session==True){
          echo json_enconde($i->ListarMascotas());
        }else{
          session_destroy();
          header('Location: ../vistas/login/login.php');
        }

    break; //listar
    case 2:
    $sesion=VerificarSesion();
    if($session==True){
    echo json_enconde($i->InsertarMascotas($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;//insertar
    case 3:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->ActuzalizarMascotas($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;
    case 4:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->EliminarMascotas($data));
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

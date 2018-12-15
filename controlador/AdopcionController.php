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

include('../custom/adopcion.php');
include('../custom/arg_adopciones.php');
require_once '../conexion/conexion.php';
$i=new arg_adopciones();
$data=json_decode(file_get_contents('php://input'),true);
$i=new Adopciones();

if(sizeof($data)>0){

$funcion=$data['funcion'];

switch ($funcion) {
  case 1:
        $sesion=VerificarSesion();
        if($session==True){
          echo json_enconde($i->ListarAdopciones());
        }else{
          session_destroy();
          header('Location: ../vistas/login/login.php');
        }

    break; //listar
    case 2:
    $sesion=VerificarSesion();
    if($session==True){
    echo json_enconde($i->InsertarAdopciones($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;//insertar
    case 3:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->ActualizarAdopciones($data));
    }else{
      session_destroy();
      header('Location: ../vistas/login/login.php');
    }

    break;
    case 4:
    $sesion=VerificarSesion();
    if($session==True){
      echo json_enconde($i->EliminarAdopciones($data));
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
        header('Location: ../vistas/Adopciones/index.php');
  }
}

//

?>

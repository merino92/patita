<?php
session_start();
require_once '../custom/municipios.php';

$json=null;
$variable=null;
if($_SERVER['REQUEST_METHOD'] == 'GET'){

  $variable=$_GET['funcion'];

}else{

$json=json_decode(file_get_contents('php://input'),true);
$variable=$json['funcion'];

}//verifica que tipo de respuesta es






if(!isset($_SESSION['usuario'])){

      header('Location: ../vistas/login/login.php'); //retorna al login en caso no haya session


}else{
  if(sizeof($variable)==0){

    header('Location: ../vistas/Municipios/index.php');
  }else{
  $objecto=new Municipio();
    switch ($variable) {
      case 1:

      $sesion=VerificarSesion();
      if($session==True){
      echo json_enconde($i->insetarMunicipio($data));
      }else{
        session_destroy();
        header('Location: ../vistas/login/login.php');
      }


      $data=$objecto->ListarMunicipio();
      echo json_encode($data);
        break;
      case 2:
      $data=$objecto->InsertarMunicipio($json);
      echo json_encode($data);

        break;
      case 3:
      break;
      case 4:
      break;
      default:
      $id=$json['iddepartamentos'];
      $data=$objecto->ListarId($id);
      echo json_encode($data);
        break;
    }

}
}
 ?>

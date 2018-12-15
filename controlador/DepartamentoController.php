<?php
//session_start();
require_once '../custom/departamento.php';
$variable=$_GET['funcion'];

if(isset($_SESSION['usuario'])){

      header('Location: ../vistas/login/login.php'); //retorna al login en caso no haya session


}else{
  if(count($variable)==0){

    header('Location: ../vistas/departamentos/index.php');
  }else{
  $objecto=new departamento();
    switch ($variable) {
      case 1:
      $sesion=VerificarSesion();
      if($session==True){
      echo json_enconde($i->insetardepartamento($data));
      }else{
        session_destroy();
        header('Location: ../vistas/login/login.php');
      }

        break;
      case 2:
      $data=$objecto->cargardepartamento();
      echo json_encode($data);

        break;
      default:
        // code...
        break;
    }

}
}
 ?>

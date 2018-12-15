<?php

function Respuesta(){
  $data;
  if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $data=$_GET['funcion'];

  }else{

    $data=json_decode(file_get_contents('php://input'),true);
  }
  return $data
}

 ?>

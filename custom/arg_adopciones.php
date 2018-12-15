<?php
include (../../conexion/conexion.php); //conexion con la base de datos

class Adopciones{ //clase adopciones

  public funtion ListarAdopciones(){
  $rows = null;
  $modelo = new Conexion()
  $conexion = $modelo->get_conexion();
  $sql = "select * from adopciones";
  $statement = $conexion->prepare($sql);
  $statement->execute();
  while ($result = $statement->fetch()){
  $rows[] = $result;

  }

  return $rows;

}//ciere de la funcion
  public funtion InsetarAdopciones($data ){
  $modelo = new Conexion();
  $conexion = $modelo->Conectar();
  $sql = "insert into adopciones(idadopcion, cod_adopcion, idmascota, nombre_adopta, apellido_adopta, iddepartamento, idmunicipio, direccion, iddocumento, n_documento, tel_casa, fecha_adopcion) values(:idadopcion, :cod_adopcion, :idmascota, :nombre_adopta, :apellido_adopta, :iddepartamento, :idmunicipio, :direccion, :iddocumento, :n_doumento, :tel_casa, :fecha_adopcion);"
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':cod_adopcion', $data['cod_adopcion']);
  $statement->bindParam(':idmascota', $data['idmascota']);
  $statement->bindParam(':nombre_adopta', $data['nombre_adopta']);
  $statement->bindParam(':apellido_adopta', $data['apellido_adopta']);
  $statement->bindParam(':iddepartamento', $data['iddepartamento']);
  $statement->bindParam(':idmunicipio', $data['idmunicipio']);
  $statement->bindParam(':direccion', $data['direccion']);
  $statement->bindParam(':iddocumento', $data['iddocumento']);
  $statement->bindParam(':n_documento', $data['n_documento']);
  $statement->bindParam(':tel_casa', $data['tel_casa']);
  $statement->bindParam(':fecha_adopcion', $data['fecha_adopcion']);
  $statement->execute();
          if (!$statement) {
            return "error al crear el registro";
          }else {

            return "registro creado correctamente";
          }//cierre del else
  }//cierre de funcion

  //function Actuzalizar(data)

  function ActuzalizarAdopciones($cod_adopcion, $idmascota,$nombre_adopta,$apellido_adopta, $iddepartamento, $idmunicipio,$direccion,$iddocumento,$n_documento,$tel_casa,$fecha_adopcion){
   $conexion = Conectar();
   $sql = "UPDATE adopciones SET cod_adopcion=:cod_adopcion and idmascota=:idmascota and nombre_adopta=:nombre_adopta and apellido_adopta=:apellido_adopta and iddepartamento=:iddepartamento and idmunicipio=:idmunicipio and direccion=:direccion and iddocumento=:iddocumento and n_documento=:n_documento and tel_casa=:tel_casa and fecha_adopcion=:fecha_adopcion ";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':cod_adopcion', $cod_adopcion);
   $statement->bindParam(':idmascota', $idmascota);
   $statement->bindParam(':nombre_adopta', $nombre_adopta);
   $statement->bindParam(':apellido_adopta', $apellido_adopta);
   $statement->bindParam(':iddepartamento', $iddepartamento);
   $statement->bindParam(':idmunicipio', $idmunicipio);
   $statement->bindParam(':direccion', $direccion);
   $statement->bindParam(':iddocumento', $iddocumento);
   $statement->bindParam(':n_documento', $n_documento);
   $statement->bindParam(':tel_casa', $tel_casa);
   $statement->bindParam(':fecha_adopcion', $fecha_adopcion);
   $statement->execute();
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $res=$statement->fetchAll();
   return $res;
  }//ciere de la funcion


//Eliminar
//function Eliminar(data)
function EliminarAdopciones($idadopcion){
 $conexion = Conectar();
 $sql = "DELETE FROM adopciones WHERE id=:id";
 $statement = $conexion->prepare($sql);
 $statement->bindParam(':idadopcion', $idadopcion);
 $statement->execute();
 $statement->setFetchMode(PDO::FETCH_ASSOC);
 $res=$statement->fetchAll();
 return $res;
}//ciere de la funcion
}
 ?>

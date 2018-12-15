



$(document).ready(function(){

}); //funcion que inicia cuando se carga la pagina

$(function(){

$("#usuario").change(function(){

var usuario=$("#usuario").val();
if(usuario.isNaN==true || usuario=="" || usuario==null){

  alert("usuario vacio");
}

});

$("#clave").change(function(){

var clave=$("#clave").val();

if(clave.isNaN==true || clave=="" || clave==null){

  alert("clave vacia");
}

});

});


function Evaluar(){
var usuario=$("#usuario").val();
var clave=$("#clave").val();


if(usuario=="" || usuario==null || clave==null ||clave=="" ){

  swal({
                   type: "warning",
                   title: 'Campos Vacios!!',
                   text: 'Ingresa tus datos para iniciar sesion',
                   showCancelButton: false, // There won't be any cancel button
                   showConfirmButton: false,
                   timer: 2000
               });
}else{


Loguearse();
}

}

function Loguearse(){
var object={
  "usuario":$("#usuario").val(),
  "clave":$("#clave").val()
};

  $.ajax({
         url: "../../controlador/loginController.php",
         type: "POST",
         data:JSON.stringify(object),
         contentType: "application/json;charset=utf-8",
         dataType: "json",
         success: function (result) {
           console.log(result);
           if(result.length >0){

             location.href="../../vistas/inicio/index.php";
     location.href="../../controlador/inicioController.php";

             location.href="../../controlador/InicioController.php";

           }else{

             swal({
                              type: "warning",
                              title: 'Error!!',
                              text: 'Usuario o clave incorrecta',
                              showCancelButton: false, // There won't be any cancel button
                              showConfirmButton: false,
                              timer: 2000
                          });
           }

         },
         error: function (errormessage) {
           console.log(errormessage);
             alert(errormessage.responseText);
         }
     });


}

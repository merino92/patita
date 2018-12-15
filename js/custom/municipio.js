$(document).ready(function(){
Listar();
ListarDepartamentos();
});


$(function(){1

$("#btnmodal").click(function(){
  $('#btnactualizar').hide();
  $("#nombre").val(null);
  $("#depar").val(1);
  $("#btnagregar").show();
});

});


function Listar(){

  var objecto={
  "funcion":1,
  };

    $.ajax({
           url: "../../controlador/MunicipiosController.php",
           type: "GET",
           data: objecto,
           contentType: "application/json;charset=utf-8",
           dataType: "json",
           success: function (result) {
             console.log(result);
               var html = '';
               $.each(result, function (key, item) {


                       html += '<tr id=' + item.idmunicipios + '>';
                       html += '<td>' + item.idmunicipios + '</td>';
                       html += '<td>'+item.municipio+'</td>';
                       html += '<td><a href="#" onclick="Editar(' + item.idmunicipios+')">Editar</a> | <a href="#" onclick="Delete(' + item.idmunicipios + ')">Eliminar</a></td>';
                       html += '</tr>';

               });
                $('#cuerpo').html(html);
              

           },
           error: function (errormessage) {
               alert(errormessage.responseText);
           }
       });

  }


function ListarDepartamentos(){


      var objecto={
      "funcion":2,
      };
  $("#depar").html(null);
        $.ajax({
               url: "../../controlador/DepartamentoController.php",
               type: "GET",
               data: objecto,
               contentType: "application/json;charset=utf-8",
               dataType: "json",
               success: function (result) {
                 console.log(result);
                   var html = '';
                   $.each(result, function (key, item) {

                     $("#depar").append('<option value="' + item.iddepartamentos + '">' + item.departamento + '</option>');


                   });

               },
               error: function (errormessage) {
                   alert(errormessage.responseText);
               }
           });
}



function Validar (){
res=true;
var nombre=$("#nombre").val();
if(nombre==null || nombre==""){
  console.log(nombre);
res=false;
  $('#nombre').css('border-color', 'Red');
}else{
   $('#nombre').css('border-color', 'lightgrey');
   res=true;
}
return res;
}

function Insertar(){
var validacion=Validar();

if(validacion==true){
  var objecto={
    "funcion":2,
    "municipio":$("#nombre").val(),
    "iddepartamento":parseInt($("#depar").val())
  };
console.log(objecto);
  $.ajax({
         url: "../../controlador/MunicipiosController.php",
         type: "POST",
         data: JSON.stringify(objecto),
         contentType: "application/json;charset=utf-8",
         dataType: "json",
         success: function (result) {
           console.log(result);
             var html = '';
             $.each(result, function (key, item) {

              if(item.respuesta>0){

                  Listar();
                swal({
                        type: "success",
                                 title: 'Exito!!',
                                 text: 'Creado Correctamente',
                                 showCancelButton: false, // There won't be any cancel button
                                 showConfirmButton: false,
                                 timer: 2000
                             });
                  $("#nombre").val(null);
                  $("#modal_form").modal('hide');

              }else{

                swal({
                        type: "warning",
                                 title: 'Error!!',
                                 text: 'Algo Ocurrio',
                                 showCancelButton: false, // There won't be any cancel button
                                 showConfirmButton: false,
                                 timer: 2000
                             });
              }


             });

         },
         error: function (errormessage) {
             alert(errormessage.responseText);
         }
     });





}else{
  swal({
          type: "warning",
                   title: 'Error!!',
                   text: 'Campos Vacios',
                   showCancelButton: false, // There won't be any cancel button
                   showConfirmButton: false,
                   timer: 2000
               });
}


}

var id=0;
function Editar(numero){
id=numero;
$("#btnagregar").hide();
$("#btnactualizar").show();
var objecto={
  "funcion":5,
  "iddepartamentos":numero};
  $.ajax({
         url: "../../controlador/MunicipiosController.php",
         type: "POST",
         data: JSON.stringify(objecto),
         contentType: "application/json;charset=utf-8",
         dataType: "json",
         success: function (result) {
           console.log(result);
             var html = '';
             var talla=result.length;
             $.each(result, function (key, item) {
                if(item.respuesta=="SIN SESION"){

              }else if(item.respuesta=='SIN PERMISO'){


              }else{

                if(talla==1){

                    $("#depar").val(parseInt(item.idepartamento));
                    $("#nombre").val(item.municipio);
                    $("#modal_form").modal('show');

                }else{
                  swal({
                          type: "warning",
                                   title: 'Error!!',
                                   text: item.respuesta,
                                   showCancelButton: false, // There won't be any cancel button
                                   showConfirmButton: false,
                                   timer: 2000
                               });  }

              }



             });

         },
         error: function (errormessage) {
             alert(errormessage.responseText);
         }
     });




}


function Actualizar(){
var res=Validar();
if(res==true){
  var objecto={
    "funcion":3,
    "municipio":$("#nombre").val(),
    "iddepartamento":parseInt($("#depar").val()),
    "idmunicipios":id
  };
console.log(objecto);
  $.ajax({
         url: "../../controlador/MunicipiosController.php",
         type: "POST",
         data: JSON.stringify(objecto),
         contentType: "application/json;charset=utf-8",
         dataType: "json",
         success: function (result) {
           console.log(result);
             var html = '';
             $.each(result, function (key, item) {

              if(item.respuesta>0){
                var tabla = $("#tabla").DataTable();
                tabla.destroy();
                  Listar();
                swal({
                        type: "success",
                                 title: 'Exito!!',
                                 text: 'Actualizado Correctamente',
                                 showCancelButton: false, // There won't be any cancel button
                                 showConfirmButton: false,
                                 timer: 2000
                             });
                  $("#nombre").val(null);
                  $("#modal_form").modal('hide');

              }else{

                swal({
                        type: "warning",
                                 title: 'Error!!',
                                 text: 'Algo Ocurrio',
                                 showCancelButton: false, // There won't be any cancel button
                                 showConfirmButton: false,
                                 timer: 2000
                             });
              }


             });

         },
         error: function (errormessage) {
             alert(errormessage.responseText);
         }
     });

}else{
  swal({
          type: "warning",
                   title: 'Error!!',
                   text: "Campos vacios",
                   showCancelButton: false, // There won't be any cancel button
                   showConfirmButton: false,
                   timer: 2000
               });  }
}

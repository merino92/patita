$(document).ready(function(){
ListarPadrinos();
ListarDepartamentos();

}); //funcion que se carga cuando inicia la pagina

//$("#idboton").show(); muestra el elemento
//$("#idboton").hide(); oculta el elemento



$(function(){

  $("#idpadrino").change(function(){

  console.log('entra');
    var dato=$("#idpadrino").val();

    if(dato==''|| dato==null){
         $('#idpadrino').css('border-color', 'Red');

    }else{

         $('#idpadrino').css('border-color', 'lightgrey');
    }
  }); //funcion que revisa el campo inmediatamente cuando se escribe

  $("#nombres").change(function(){
    var dato=$("#nombres").val();
    if(dato==''|| dato ==null){

      $("#nombres").css('border-color','Red');
    }else{

       $('#nombres').css('border-color', 'lightgrey');
    }
  });

  $("#edad").change(function(){
    var dato=$("#edad").val();
    if(dato==''|| dato ==null || dato <=0){

      $("#edad").css('border-color','Red');
    }else{

       $('#edad').css('border-color', 'lightgrey');
    }
  });

  $("#dui").change(function(){
    var dato=$("#dui").val();
    if(dato==''|| dato ==null){

      $("#dui").css('border-color','Red');
    }else{

       $('#dui').css('border-color', 'lightgrey');
    }
  });

  $("#direccion").change(function(){
    var dato=$("#direccion").val();
    if(dato==''|| dato ==null){

      $("#direccion").css('border-color','Red');
    }else{

       $('#direccion').css('border-color', 'lightgrey');
    }
  });

  $("#telefono").change(function(){
    var dato=$("telefono").val();
    if(dato==''|| dato ==null){

      $("#telefono1").css('border-color','Red');
    }else{

       $('#telefono1').css('border-color', 'lightgrey');
    }
  });

  $("#email").change(function(){
    var dato=$("#email").val();
    if(dato==''|| dato ==null){

      $("#email").css('border-color','Red');
    }else{

       $('#email').css('border-color', 'lightgrey');
    }
  });
  $("#depar").change(function(){

    var departamento=$("#depar").val();
    ListarMunicipio(departamento);
  });
});
//funcion para validar los campos

 //campos del formulario



function AgregarPadrino(){
var res=ValidarCampos();
console.log(res);
if(res==true){
  var nombres=SepararNombres();
  var objecto={};
  if(nombres.length>3){
    objecto={
      "funcion":2,
     "codigo":$("#idpadrino").val(),
     "nombres":nombres[0]+" "+nombres[1],
     "primer_apellido":nombres[2],
     "segundo_apellido":nombres[3],
     "edad":parseInt($("#edad").val()),
     "celular":$("#telefono1").val(),
     "dui":$("#dui").val(),
     "direccion":$("#direccion").val(),
     "email":$("#email").val(),
     "iddepartamento":$("#depar").val(),
     "idmunicipio":$("#municipio").val()

   };

 }else{
   objecto={
     "funcion":2,
    "codigo":$("#idpadrino").val(),
    "nombres":nombres[0]+" "+nombres[1],
    "primer_apellido":nombres[2],
    "segundo_apellido":" ",
    "edad":parseInt($("#edad").val()),
    "celular":$("#telefono1").val(),
    "dui":$("#dui").val(),
    "direccion":$("#direccion").val(),
    "email":$("#email").val(),
    "iddepartamento":$("#depar").val(),
    "idmunicipio":$("#municipio").val()

  };
 }
console.log(objecto);
 $.ajax({
        url: "../../controlador/PadrinoController.php",
        type: "POST",
        data:JSON.stringify(objecto),
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function (result) {
          $.each(result,function(i,item){

              if(item.respuesta>0){
                ListarPadrinos();
                $("#modal_form").modal('hide');
                  Limpiar();
                swal({
                                 type: "success",
                                 title: 'Exito!!',
                                 text: 'Ingresado',
                                 showCancelButton: false, // There won't be any cancel button
                                 showConfirmButton: false,
                                 timer: 2000
                             });

              }else if(item.respuesta=="SIN SESION") {

              }else {}

          });

        },
        error: function (errormessage) {
          console.log(errormessage);
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

function SepararNombres(){
  var nombre=$("#nombres").val();
  var cadena=nombre.split(" ");
  var matriz=[];
  for(var i=0;i<=cadena.length;i++){
    var dato=cadena[i];
    if(dato==""||dato==null){

    }else{
      matriz.push(dato);
    }
  }
  return matriz;

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


function ListarMunicipio(id,res){

  var objecto={
  "funcion":6,
  "iddepartamentos":id
  };
$("#municipio").html(null);
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

                 $("#municipio").append('<option value="' + item.idmunicipios + '">' + item.municipio + '</option>');


               });
               if(res!=null){
                 $("#municipio").val(res);
               }
           },
           error: function (errormessage) {
               alert(errormessage.responseText);
           }
       });
}

function ListarPadrinos(){
  var objecto={
  "funcion":1,
  };
$("#tabla1").html(null);
    $.ajax({
           url: "../../controlador/PadrinoController.php",
           type: "GET",
           data: objecto,
           contentType: "application/json;charset=utf-8",
           dataType: "json",
           success: function (result) {
             console.log(result);
               var html = '';
               $.each(result, function (key, item) {


                       html += '<tr id=' + item.idpadrinos + '>';
                       html += '<td>' + item.cod_padrino + '</td>';
                       html += '<td>'+(item.nombres+" "+item.primer_apellido)+'</td>';
                       html += '<td><a href="#" onclick="Editar(' + item.idpadrinos+')">Editar</a> | <a href="#" onclick="Delete(' + item.idpadrinos + ')">Eliminar</a></td>';
                       html += '</tr>';

               });
                $('#tabla1').html(html);


           },
           error: function (errormessage) {
               alert(errormessage.responseText);
           }
       });


}


function ValidarCampos(){
    var res=true;
    console.log('entra');
  if($("#idpadrino").val()==" "){
  res=false;
  $("#idpadrino").css('border-color','Red');
  }else{
  $('#idpadrino').css('border-color', 'lightgrey');
  res=true;
  }

  console.log(res);
  if($("#nombres").val()==" "){
  res=false;
  $("#nombres").css('border-color','Red');
  }else{
  $('#nombres').css('border-color', 'lightgrey');
  res=true;
  }
  console.log(res);
  if($("#edad").val()==""){
  res=false;
  $("#edad").css('border-color','Red');
  }else{
  $('#edad').css('border-color', 'lightgrey');
  res=true;
  }
  console.log(res);
  if($("#dui").val().trim()==""){
  res=false;
  $("#dui").css('border-color','Red');
  }else{
  $('#dui').css('border-color', 'lightgrey');
  res=true;
  }
  console.log(res);

  if($("#direccion").val().trim()==""){
  res=false;
  $("#direccion").css('border-color','Red');
  }else{
  $('#direccion').css('border-color', 'lightgrey');
  res=true;
  }
  console.log(res);

  if($("#telefono1").val().trim()==""){
  console.log($("#telefono").val());
  res=false;
  $("#telefono1").css('border-color','Red');
  }else{
  $('#telefono1').css('border-color', 'lightgrey');
  res=true;
  }
return res;
} //valida los



function Limpiar(){
$("#direccion").val(null);
$("#telefono1").val(null);
$("#dui").val(null);
$("#edad").val(null);
$("#nombres").val(null);
$("#idpadrino").val(null);
}

var idpadrino=0;
function Editarpadrino(){
  var res=ValidarCampos();
  console.log(res);
  if(res==true){
    var nombres=SepararNombres();
    var objecto={};
    if(nombres.length>3){
      objecto={
        "funcion":3,
       "codigo":$("#idpadrino").val(),
       "nombres":nombres[0]+" "+nombres[1],
       "primer_apellido":nombres[2],
       "segundo_apellido":nombres[3],
       "edad":parseInt($("#edad").val()),
       "celular":$("#telefono1").val(),
       "dui":$("#dui").val(),
       "direccion":$("#direccion").val(),
       "email":$("#email").val(),
       "iddepartamento":$("#depar").val(),
       "idmunicipio":$("#municipio").val(),
       "idpadrinos":idpadrino

     };

   }else{
     objecto={
       "funcion":2,
      "codigo":$("#idpadrino").val(),
      "nombres":nombres[0]+" "+nombres[1],
      "primer_apellido":nombres[2],
      "segundo_apellido":" ",
      "edad":parseInt($("#edad").val()),
      "celular":$("#telefono1").val(),
      "dui":$("#dui").val(),
      "direccion":$("#direccion").val(),
      "email":$("#email").val(),
      "iddepartamento":$("#depar").val(),
      "idmunicipio":$("#municipio").val(),
      "idpadrinos":idpadrino

    };
   }
  console.log(objecto);
   $.ajax({
          url: "../../controlador/PadrinoController.php",
          type: "POST",
          data:JSON.stringify(objecto),
          contentType: "application/json;charset=utf-8",
          dataType: "json",
          success: function (result) {
            $.each(result,function(i,item){

                if(item.respuesta>0){
                  ListarPadrinos();
                  $("#modal_form").modal('hide');
                    Limpiar();
                  swal({
                                   type: "success",
                                   title: 'Exito!!',
                                   text: 'Actualizado',
                                   showCancelButton: false, // There won't be any cancel button
                                   showConfirmButton: false,
                                   timer: 2000
                               });

                }else if(item.respuesta=="SIN SESION") {

                }else {}

            });

          },
          error: function (errormessage) {
            console.log(errormessage);
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

function Editar(id){
  idpadrino=id;
  var objecto={
  "funcion":5,
  "idpadrino":id
  };

    $.ajax({
           url: "../../controlador/PadrinoController.php",
           type: "POST",
           data:JSON.stringify(objecto),
           contentType: "application/json;charset=utf-8",
           dataType: "json",
           success: function (result) {
             console.log(result);
               var html = '';
               var muni;
               var depa;
               $.each(result, function (key, item) {

                 $("#direccion").val(item.direccion);
                 $("#telefono1").val(item.celular);
                 $("#dui").val(item.dui);
                 $("#edad").val(item.edad);
                 $("#nombres").val(item.nombres+" "+item.primer_apellido+" "+item.segundo_apellido);
                 $("#idpadrino").val(item.cod_padrino);
                 $("#email").val(item.correo);
                $("#depar").val(item.iddepartamento);
                  muni=parseInt(item.idmunicipio);
                   ListarMunicipio(item.iddepartamento,muni);

               });

               $("#modal_form").modal('show');


           },
           error: function (errormessage) {
               alert(errormessage.responseText);
           }
       });



}

function Delete(id){
  var res=ObtenerNombre(id);
  swal({
        title: 'Advertencia!',
        text: '¿Estas seguro de eliminar a '+res+' ?!!',
        type: 'warning',
        confirmButtonText: 'Eliminar',
        cancelButtonText:'Cancelar',
        showCancelButton: "cancelar",
        confirmButtonColor: '#F05534',
         closeOnConfirm: false
    }, function (isConfirm) {

        if (isConfirm) {
            elimina(id);

        }
    });
}

function ObtenerNombre(id) {

    var res = $("#" + id).find('td:eq(1)').html();
    return res;
}


function elimina(id){

var objecto={
  "funcion":4,
  "id":id
};
$.ajax({
       url: "../../controlador/PadrinoController.php",
       type: "POST",
       data: JSON.stringify(objecto),
       contentType: "application/json;charset=utf-8",
       dataType: "json",
       success: function (result) {
         console.log(result);
         $.each(result,function(i,item){

           if(item.respuesta>0){
                   ListarPadrinos();
                 swal({
                         type: "success",
                                  title: 'Exito!!',
                                  text: 'Actualizado Correctamente',
                                  showCancelButton: false, // There won't be any cancel button
                                  showConfirmButton: false,
                                  timer: 2000
                              });


             }else{
               swal({
                       type: "error",
                                title: 'Error!!',
                                text: 'Algo salio mal',
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


}

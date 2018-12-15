$(document).ready(function(){

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

    $("#telefono").css('border-color','Red');
  }else{

     $('#telefono').css('border-color', 'lightgrey');
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

});
//funcion para validar los campos


function ValidarCampos(){
var res=true;

if($("#idpadrino").val().trim()==""){
  res=false;
  $("#idpadrino").css('border-color','Red');
}else{
  $('#idpadrino').css('border-color', 'lightgrey');
}


if($("#nombres").val().trim()==""){
  res=false;
  $("#nombres").css('border-color','Red');
}else{
  $('#nombres').css('border-color', 'lightgrey');
}

if($("#edad").val().trim()==""){
  res=false;
  $("#edad").css('border-color','Red');
}else{
  $('#edad').css('border-color', 'lightgrey');
}

if($("#dui").val().trim()==""){
  res=false;
  $("#dui").css('border-color','Red');
}else{
  $('#dui').css('border-color', 'lightgrey');
}


if($("#direccion").val().trim()==""){
  res=false;
  $("#direccion").css('border-color','Red');
}else{
  $('#direccion').css('border-color', 'lightgrey');
}


if($("#telefono").val().trim()==""){
  res=false;
  $("#telefono").css('border-color','Red');
}else{
  $('#telefono').css('border-color', 'lightgrey');
}
return res;
} //valida los campos del formulario



function AgregarPadrino(){
var res=ValidarCampos;

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
     "telefono":$("#telefono").val(),
     "dui":$("#dui").val(),
     "direccion":$("#direccion").val(),
     "email":$("#email").val()

   };

 }else{
   objecto={
     "funcion":3,
    "codigo":$("#idpadrino").val(),
    "nombres":nombres[0]+" "+nombres[1],
    "primer_apellido":nombres[2],
    "segundo_apellido":" ",
    "edad":parseInt($("#edad").val()),
    "telefono":$("#telefono").val(),
    "dui":$("#dui").val(),
    "direccion":$("#direccion").val(),
    "email":$("#email").val()

  };
 }

 $.ajax({
        url: "../../controlador/PadrinosController.php",
        type: "POST",
        data:JSON.stringify(object),
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function (result) {
          $.each(result,function(i,item){

              if(item.respuesta=="EXITO"){


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
  var nombre=$("nombres").val();
  var cadena=nombre.str.split(" ");
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

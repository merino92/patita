$(document).ready(function(){

Listar();
});


function Listar(){
  var object={funcion:1};

  $.ajax({
         url: "../../controlador/AdopcionController.php",
         type: "POST",
         data:JSON.stringify(object),
         contentType: "application/json;charset=utf-8",
         dataType: "json",
         success: function (result) {

           location.href=result.respuesta;
           console.log(result);
             /*var html = '';
             $.each(result, function (key, item) {


                     html += '<tr id=' + item.idalumno + ' onMouseOver="ResaltarFila(' + item.idalumno + ');" onMouseOut="RestablecerFila(' + item.idalumno +')" onClick="MostrarDatos(' + item.idalumno + ',' + true + ');">';
                     html += '<td>' + item.codalumno + '</td>';
                     html += '<td>' + item.nombres + '</td>';
                     html += '<td>' + item.primer_apellido + '</td>';
                     html += '<td>' + segundo + '</td>';
                     html += '<td><a href="#" onclick="Editar(' + item.idalumno + ',' + false + ')">Editar</a> | <a href="#" onclick="Delete(' + item.idalumno + ')">Eliminar</a></td>';
                     html += '</tr>';

             });
             var tabla = $("#listador").DataTable();
               tabla.destroy();
             $('#tabla1').html(html);
             $('#listador').DataTable({
                "language": {
                    "search": "Buscar ",
                    "lengthMenu": "Mostrar _MENU_  registros por pagina",
                    "zeroRecords": "No hay Registros",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "paginate": {
                        "previous": "Atras",
                        "next":"Siguiente"
                    }

                },


            });
            $('.dataTables_filter input[type="search"]').
                attr('placeholder', 'Buscar....').
                attr('onKeyUp','this.value=this.value.toUpperCase()').
                css({ 'width': '350px', 'display': 'inline-block' }); */
         },
         error: function (errormessage) {
           console.log(errormessage);
             alert(errormessage.responseText);
         }
     });

  }


function ValidarCampos(){
  var respuesta=true;

  if($("#idvoluntariado").val()==""){
     $('#idvoluntariado').css('border-color', 'Red');
     respuesta=false;
  }else{
      $("#idvoluntariado").css('border-color','lightgrey');
  }

  if($("#nombres").val()==""){
    respuesta=false;
     $('#nombres').css('border-color', 'Red');
  }else{
    $('#nombres').css('border-color', 'lightgrey');
  }

  if($("#dui").val()==""){
      respuesta=false;
     $('#dui').css('border-color', 'Red');
  }else{
    $('#dui').css('border-color', 'lightgrey');
  }
  if($("#edad").val()==""){
      respuesta=false;
     $('#edad').css('border-color', 'Red');
  }else{
    $('#edad').css('border-color', 'lightgrey');
  }

  if($("#direccion").val()==""){
      respuesta=false;
     $('#direccion').css('border-color', 'Red');
  }else{
    $('#direccion').css('border-color', 'lightgrey');
  }
  if($("#telefono").val()==""){
      respuesta=false;
     $('#telefono').css('border-color', 'Red');
  }else{
    $('#telefono').css('border-color', 'lightgrey');
  }
  if($("#email").val()==""){
      respuesta=false;
     $('#email').css('border-color', 'Red');
  }else{
    $('#email').css('border-color', 'lightgrey');
  }
  
}


$(function (){

  $("#nombres").change(function(){

    var n=$("#nombres").val();
    console.log("dato"+n);
    if(n==""){
       $('#nombres').css('border-color', 'Red');

    }else {
      $("#nombres").css('border-color','lightgrey');
    }


  });
});

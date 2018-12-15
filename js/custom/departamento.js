$(document).ready(function(){
Listar();
});


function Listar(){

  var objecto={
  "funcion":2,
  };

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


                       html += '<tr id=' + item.iddepartamentos + ' onMouseOver="ResaltarFila(' + item.iddepartamento + ');" onMouseOut="RestablecerFila(' + item.departamento +')">';
                       html += '<td>' + item.iddepartamentos + '</td>';
                       html += '<td>' + item.departamento + '</td>';
                       html += '<td>' + item.cod_postal + '</td>';
                       html += '</tr>';

               });
               $('#cuerpo').html(html);
           },
           error: function (errormessage) {
               alert(errormessage.responseText);
           }
       });

  }

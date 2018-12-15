$(document.ready(function{
Listar();


}));
function Listar(){

var objecto={
  funcion:2,
};

  $.ajax({
         url: "../../controlador/DonacionesController.php",
         type: "GET",
         data:JSON.stringify(object)
         contentType: "application/json;charset=utf-8",
         dataType: "json",
         success: function (result) {
             var html = '';
             $.each(result, function (key, item) {


                                      html += '<tr id=' + item.idinventario + '>';
                                      html += '<td>' + item.idproducto + '</td>';
                                      html += '<td>' + item.existencias + '</td>';

                                      html += '</tr>';

                 }
             });
             $('#cuerpo').html(html);
         },
         error: function (errormessage) {
             alert(errormessage.responseText);
         }
     });

}

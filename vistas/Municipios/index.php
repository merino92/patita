<?php require_once "../../vistas/base/base.php"; ?>
<?php startblock('body'); ?>


<div class=" panel panel-flat">

  <div class="panel-heading">
    <h3 class="panel-title" >Municipios</h3>
  </div>
  <div class="heading-elements">

  <button type="button" id="btnmodal" class="btn btn-info" data-toggle="modal" data-target="#modal_form">Agregar
</button>

  </div>

  <div class="table_responsive">
    <table class="table table-xs">
      <thead>
        <tr>
          <td>CODIGO</td>
          <td>NOMBRE</td>
          <td>OPCIONES</td>
        </tr>
      </thead>
      <tbody id="cuerpo" class="tbody">

      </tbody>
    </table>
  </div>
</div><!--fin del flat-->


<!--Modal-->
<div id="modal_form" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div id="modal1" class="modal-dialog modal-lg">
<div class="modal-content">

  <div class="modal-header">

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
    </button>
    <h3>Formulario de Municipios</h3>
  </div>

<div class="modal-body">
   <!--- aqui va lo del formulario --->
   <form class="form-horizontal" id="formulario" action"#" method="post">
    <div class="row">
     <div class="col-sm-4">
    <img class="col-sm-12 control-label" src="../../imagenes/logopata.jpg" alt="">
     </div>
   <!--la otra mitad del formulario-->
   <div class="col-sm-8">
      <h3>Datos </h3>
       <div class="form-group">
           <label for="depar" class="col-sm-4 control-label">Departamento</label>
           <div class="col-sm-7">
               <select class="form-control" id="depar" name="depar"></select>
           </div>
       </div>
       <div class="form-group">
           <label for="nombre" class="col-sm-4 control-label">Nombre de Municipio</label>
           <div class="col-sm-7">
               <input name="nombre" id="nombre" class="form-control"  type="text" placeholder="Nombre de Municipio">
           </div>
       </div>
   </div>

   </div><!--aqui termina el row de  formulario-->
 </form><!--aqui termina el formulario-->
</div><!--aqui termina el body de modal-->

<div class="modal-footer">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg -12">
      <div class="form-group">


        <p class="btnderecha">  <button  type="button" id="btnagregar" onclick="Insertar()" class="btn btn-success btn-sm btn-labeled ">Agregar</button>
          <button  type="button" id="btnactualizar" onclick="Actualizar()" class="btn btn-info btn-sm btn-labeled ">Actualizar</button>




         <button  type="button" data-dismiss="modal"  id="btncancelar" class="btn btn-danger btn-sm btn-labeled ">Cancelar</button></p>

      </div>
    </div>
  </div>
</div><!--fin de foother modal,-->

</div>
</div>
</div>

<!--validando formularios-->



<?php endblock('body'); ?>

<?php startblock('js'); ?>
<script type="text/javascript" src="../../js/custom/municipio.js"></script>
<?php endblock('js'); ?>

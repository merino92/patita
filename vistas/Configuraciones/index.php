<?php require_once "../../vistas/base/base.php"; ?>
<?php startblock('body'); ?>


<div class=" panel panel-flat">

  <div class="panel-heading">
    <h3 class="panel-title">Configuraciones</h3>
  </div>
  <div class="heading-elements">
<button type="button" class="btn btn-info btnderecha" data-toggle="modal" data-target="#modal_form">
Agregar Configuraciones
</button>
  </div>

  <div class="table_responsive">
    <table class="table table-xs">
      <thead>
        <tr class="bg-primary">
          <td>Nombre de la Institucion</td>
          <td>Direccion</td>
          <td>Telefono</td>
          <td>Correo</td>
          <td>Encargado</td>
          <td>Departamento</td>
          <td>Municipio</td>
        </tr>
      </thead>
      <tbody id="cuerpo" class="tbody">

      </tbody>
    </table>
  </div>
</div><!--fin del flat.-->

<!--modal-->
   <div id="modal_form" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div id"modal1" class="modal-dialog modal-lg">
   <div class="modal-content">

     <div class="modal-header">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
       </button>
       <h3>Formulario de Configuraciones</h3>

     </div>

   <div class="modal-body">
     <!--- aqui va lo del formulario --->
     <form class="form-horizontal" id="formularioppadrino" action"#" method="post">
      <div class="row">
       <div class="col-sm-4">

      <img class="col-sm-12 control-label" src="../../imagenes/logopata.jpg" alt="">
       </div>

     <!--la otra mitad del formulario-->
     <div class="col-sm-8">
        <h3>Datos</h3>
       <div class="form-group">
           <label for="nombreinsti" class="col-sm-3 control-label">Nombre de la Institucion</label>
           <div class="col-sm-8">
               <input name="nombreinsti" id="nombreinsti" class="form-control" type="text" placeholder="Nombre de la Institucion">
           </div>
       </div>
       <div class="form-group">
           <label for="encargado" class="col-sm-3 control-label">Encargado</label>
           <div class="col-sm-8">
               <input name="encargado" id="encargado" class="form-control" type="text" placeholder="Encargado">
           </div>
       </div>
       <div class="form-group">
           <label for="direccion" class="col-sm-3 control-label">Dirección</label>
           <div class="col-sm-8">
               <input name="direccion" id="direccion" class="form-control" type="text" placeholder="Dirección">
           </div>
       </div>
       <div class="form-group">
           <label for="telefono" class="col-sm-3 control-label">Teléfono</label>
           <div class="col-sm-8">
               <input name="telefono" id="telefono" class="form-control" type="text" placeholder="Teléfono">
           </div>
       </div>

         <div class="form-group">
             <label for="email" class="col-sm-3 control-label">E-mail</label>
             <div class="col-sm-8">
                 <input name="email" id="email" class="form-control" type="email" placeholder="E-mail">
             </div>
         </div>
         <div class="form-group">
             <label for="email" class="col-sm-3 control-label">Departamento</label>
             <div class="col-sm-8">
                 <select class="form-control" id="depar" name="depar"></select>
             </div>
         </div>
         <div class="form-group">
             <label for="email" class="col-sm-3 control-label">Municipio</label>
             <div class="col-sm-8">
                <select class="form-control" id="municipio" name="municipio"></select>
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
        <p class="btnderecha">  <button  type="button" id="btnguardar" class="btn btn-primary btn-sm btn-labeled ">Guardar</button>
          <button  type="button" id="btnactualizar" class="btn btn-info btn-sm btn-labeled ">Actualizar</button>
         <button  type="button" data-dismiss="modal" id="btncancelar" class="btn btn-danger btn-sm btn-labeled ">Cancelar</button></p>

      </div>
    </div>
  </div>
</div><!--fin de foother modal-->

</div>
</div>
</div>




<?php endblock('body'); ?>

<?php startblock('js'); ?>
<script type="text/javascript" src="../../js/custom/departamento.js"></script>
<?php endblock('js'); ?>

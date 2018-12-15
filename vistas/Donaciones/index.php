<?php
require_once "../../vistas/base/base.php";
 ?>

 <?php startblock('body'); ?>
 <div class="panel panel-flat">
   <div class="panel-heading">
     <h5 class="panel-title">Donaciones</h5>
     <div class="heading-elements">
  <button type="button" class="btn btn-primary btnderecha" data-toggle="modal" data-target="#modal_form">
   Registro de Donaciones
</button>


     </div>
   </div>

   <!--- aqui va lo del formulario --->
   <div class="form-group">

     <div class="table_responsive">
       <table class="table table-xs">
         <thead>
           <tr class="bg-primary">
             <th>Codigo/Id</th>
             <th>Nombre del Producto</th>
             <th>Cantidad</th>
             <th>Departamento</th>
             <th>Municipio</th>
           </tr>

           <tbody id="tabla1" class="tbody" ></tbody>

         </thead>

       </table>

     </div>

   </div> <!-- aqui termina la tabla-->
 </div><!--FIN de panel flat-->

 <!--modal-->
    <div id="modal_form" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div id"modal1" class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
        </button>
        <h3>Formulario de Donaciones</h3>
      </div>

    <div class="modal-body">
    <!--- aqui va lo del formulario --->

    <form class="form-horizontal" id="formulariodonaciones" action"#" method="post">
     <div class="row">
      <div class="col-sm-4">

     <img class="col-sm-12 control-label" src="../../imagenes/logopata.jpg" alt="" width="100%">
      </div>

 <!--la otra mitad del formulario-->
    <div class="col-sm-8">
        <h3>Datos</h3>
      <div class="form-group">
          <label for="nombreproducto" class="col-sm-3 control-label">Nombre del Producto</label>
          <div class="col-sm-8">
              <input name="nombreproducto" id="nombreproducto" class="form-control" type="text" placeholder="Nombre del Producto">
          </div>
      </div>
      <div class="form-group">
          <label for="cantidadproducto" class="col-sm-3 control-label">Cantidad</label>
          <div class="col-sm-8">
              <input name="cantidadproducto" id="cantidadproducto" class="form-control" type="text" placeholder="Cantidad Producto">
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


  </div><!--aqui termina el row formulario-->
 </form><!--aqui termina el formulario-->
   </div><!--aqui termina el body de modal-->

 <div class="modal-footer">
   <div class="row">
     <div class="col-sm-12 col-md-12 col-lg -12">
       <div class="form-group">
         <p class="btnderecha">  <button  type="button" id="btnguardar" class="btn btn-primary btn-sm btn-labeled ">Guardar</button>
           <button  type="button" id="btnactualizar" class="btn btn-info btn-sm btn-labeled ">Actualizar</button>
           <button  type="button" id="btnagregar" class="btn btn-success btn-sm btn-labeled ">Agregar Nuevo</button>
          <button  type="button" data-dismiss="modal" id="btncancelar" class="btn btn-danger btn-sm btn-labeled ">Cancelar</button></p>
       </div>
       </div>
     </div>
   </div>
 </div><!--fin de foother modal.-->

 </div>
 </div>
 </div>




<?php endblock('body'); ?>

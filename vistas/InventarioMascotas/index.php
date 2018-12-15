<?php
require_once "../../vistas/base/base.php";
 ?>

 <?php startblock('body'); ?>
 <div class="panel panel-flat">
   <div class="panel-heading">
     <h5 class="panel-title">Inventario de Mascotas</h5>
     <div class="heading-elements">
  <button type="button" class="btn btn-primary btnderecha" data-toggle="modal" data-target="#modal_form">
  Agregar Mascotas
</button>


     </div>
   </div>

   <!--- aqui va lo del formulario, --->
   <div class="form-group">

     <div class="table_responsive">
       <table class="table table-xs">
         <thead>
           <tr>
             <th>Nombre</th>
             <th>Genero</th>
             <th>Raza</th>
             <th>Tipo de sangre</th>
             <th>Color</th>
             <th>Imagenes</th>
           </tr>
           <tbody id="tabla1" class="tbody" ></tbody>
         </thead>
       </table>
     </div>
   </div> <!-- aqui termina la tabla-->
 </div><!--FIN de panel flat-->

 <!--Modal-->
 <div id="modal_form" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 <div id="modal1" class="modal-dialog modal-lg">
 <div class="modal-content">

   <div class="modal-header">

     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
     </button>
     <h3>Formulario de Mascotas</h3>
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
       <h3>Datos de Mascotas</h3>
       <div class="form-group">
           <label for="nombremascota" class="col-sm-4 control-label">Nombre Mascota</label>
           <div class="col-sm-7">
               <input name="nombremascota" id="nombremascota" class="form-control"  type="text" placeholder="Nombre Mascota">
           </div>
       </div>
        <div class="form-group">
            <label for="genero" class="col-sm-4 control-label">Genero</label>
            <div class="col-sm-7">
                <select class="form-control" id="genero" name="genero"></select>
            </div>
        </div>
        <div class="form-group">
            <label for="raza" class="col-sm-4 control-label">Raza</label>
            <div class="col-sm-7">
                <select class="form-control" id="raza" name="raza"></select>
            </div>
        </div>
        <div class="form-group">
            <label for="tiposangre" class="col-sm-4 control-label">Tipo de Sangre</label>
            <div class="col-sm-7">
                <input name="tiposangre" id="tiposangre" class="form-control"  type="text" placeholder="Nombre de Municipio">
            </div>
        </div>
        <div class="form-group">
            <label for="color" class="col-sm-4 control-label">Color</label>
            <div class="col-sm-7">
                <input name="color" id="color" class="form-control"  type="text" placeholder="Color Mascota">
            </div>
        </div>
        <div class="form-group">
            <label for="imagen" class="col-sm-4 control-label">Imagen</label>
            <div class="col-sm-7">
              <input type="search" id="btnimagen" name="q"><button>Buscar</button>
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

         <p class="btnderecha">  <button  type="button" id="btnagregar" class="btn btn-success btn-sm btn-labeled ">Agregar</button>
           <button  type="button" id="btnactualizar" class="btn btn-success btn-sm btn-labeled ">Actualizar</button>
          <button  type="button" data-dismiss="modal"  id="btncancelar" class="btn btn-danger btn-sm btn-labeled ">Cancelar</button></p>

       </div>
     </div>
   </div>
 </div><!--fin de foother modal-->

 </div>
 </div>
 </div>


<?php endblock('body'); ?>

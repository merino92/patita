<?php require_once "../../vistas/base/base.php"; ?>
<?php startblock('body'); ?>


<div class=" panel panel-flat">

  <div class="panel-heading">
    <h3 class="panel-title" >Producto</h3>
  </div>
  <div class="heading-elements">
  <button type="button" class="btn btn-info btnderecha" data-toggle="modal" data-target="#modal_form">
Agregar Productos
</button>

  </div>

  <div class="table_responsive">
    <table class="table table-xs">
      <thead>
        <tr class="bg-primary">
          <td>Codigo</td>
          <td>Nombre Producto</td>
        </tr>
      </thead>
      <tbody id="cuerpo" class="tbody">

      </tbody>
    </table>
  </div>
</div>


<!--Modal-->
<div id="modal_form" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div id="modal1" class="modal-dialog modal-lg">
<div class="modal-content">

  <div class="modal-header">

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
    </button>
    <h3>Formulario de Productos</h3>
  </div>

<div class="modal-body">
   <!--- aqui va lo del formulario --->
   <form class="form-horizontal" id="formulario" action"#" method="post">
    <div class="row">
     <div class="col-sm-4">
    <img class="col-sm-12 control-label" src="../../imagenes/logopata.jpg" alt="" width="100%">
     </div>
   <!--la otra mitad del formulario-->
   <div class="col-sm-8">
      <h3>Productos </h3>
      <div class="form-group">
          <label for="codigoprod" class="col-sm-4 control-label">Codigo Producto</label>
          <div class="col-sm-7">
              <input name="codigoprode" id="codigoprod" class="form-control" type="text" placeholder="Codigo Producto">
          </div>
      </div>
       <div class="form-group">
           <label for="nombreprod" class="col-sm-4 control-label">Nombre del Producto</label>
           <div class="col-sm-7">
               <input name="nombreprod" id="nombreprod" class="form-control" type="text" placeholder="Nombre del Producto">
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

        <p class="btnderecha">  <button  type="button" id="btnagregar" class="btn btn-primary btn-sm btn-labeled ">Agregar</button>
          <button  type="button" id="btnactualizar" class="btn btn-info btn-sm btn-labeled ">Actualizar</button>
          <button  type="button" id="btnagregar" class="btn btn-success btn-sm btn-labeled ">Agregar Nuevo</button>
         <button  type="button" data-dismiss="modal"  id="btncancelar" class="btn btn-danger btn-sm btn-labeled ">Cancelar</button></p>

      </div>
    </div>
  </div>
</div><!--fin de foother modal,-->

</div>
</div>
</div>

<?php endblock('body'); ?>

<?php startblock('js'); ?>
<script type="text/javascript" src="../../js/custom/municipio.js"></script>
<?php endblock('js'); ?>

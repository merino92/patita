<?php
require_once "../../vistas/base/base.php";
 ?>

 <?php startblock('body'); ?>

 <div class="panel panel-flat">
   <div class="panel-heading">
     <h5 class="panel-title">Adopciones</h5>
     <div class="heading-elements">
      <a><button type="button" class="btn btn-info btn-md btnderecha" data-toggle="modal" data-target="#modal_form">
Registro de Adopciones
</button>
</a>

     </div>
   </div>


   <div class="form-group"><!--tabla-->
     <div class="table_responsive">
       <table class="table table-xs">
         <thead>
           <tr class="bg-primary">
             <th>Codigo/Id</th>
             <th>Nombre</th>
             <th>Especie</th>
             <th>Raza</th>
             <th>Color</th>
             <th>Opciones</th>

           </tr>

           <tbody id="tabla1" class="tbody" ></tbody>

         </thead>

       </table>

     </div>

   </div> <!-- aqui termina la tabla-->

 </div><!--fin del flat-->

<!--Modal-->
  <div id="modal_form" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div  id="modal1" class="modal-dialog modal-lg">
  <div class="modal-content">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
      </button>
      <h3>Formulario de Adopciones</h3>
    </div>

    <div class="modal-body">

      <!--- aqui va lo del formulario --->

      <form class="form-horizontal" action"#" method="post">
       <div class="row">
   <!--la otra mitad del formulario-->
      <div class="col-sm-6">
      <h3>Datos del Adoptante</h3>
        <div class="form-group">
            <label for="nombres" class="col-sm-3 control-label">Nombres</label>
            <div class="col-sm-8">
                <input name="nombres" id="nombres" class="form-control" type="text" placeholder="Nombres">
            </div>
        </div>
        <div class="form-group">
            <label for="edad" class="col-sm-3 control-label">Edad</label>
            <div class="col-sm-8">
                <input name="edad" id="edad" class="form-control" type="text" placeholder="Edad">
            </div>
        </div>
        <div class="form-group">
            <label for="dui" class="col-sm-3 control-label">N° Dui</label>
            <div class="col-sm-8">
                <input name="dui" id="dui" class="form-control" type="text" placeholder="N° Dui">
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
                  <input name="email" id="email" class="form-control"  type="email" placeholder="E-mail">
              </div>
          </div>
      </div>

      <div class="col-sm-6">

        <h3>Datos del Adoptado</h3>
             <div class="form-group">
                 <label for="idadoptado" class="col-sm-3 control-label">Id </label>
                 <div class="col-sm-8">
                     <input name="idadoptado" id="idadoptado" class="form-control"  type="text" placeholder="Id del Adoptado">
                 </div>
             </div>
             <div class="form-group">
                 <label for="nombreadoptado" class="col-sm-3 control-label">Nombre</label>
                 <div class="col-sm-8">
                     <input name="nombreadoptado" id="nombreadoptado" class="form-control" type="text" placeholder="Nombre del adoptado">
                 </div>
             </div>
             <div class="form-group">
                 <label for="especie" class="col-sm-3 control-label">Especie</label>
                 <div class="col-sm-8">
                     <input name="especie" id="especie" class="form-control" type="text" placeholder="Especie">
                 </div>
             </div>
             <div class="form-group">
                 <label for="raza" class="col-sm-3 control-label">Raza</label>
                 <div class="col-sm-8">
                     <input name="raza" id="raza" class="form-control" type="text" placeholder="Raza">
                 </div>
             </div>
             <div class="form-group">
                 <label for="color" class="col-sm-3 control-label">Color</label>
                 <div class="col-sm-8">
                     <input name="color" id="color" class="form-control" type="text" placeholder="color">
                 </div>
             </div>
             <div class="form-group">
                 <label for="tamano" class="col-sm-3 control-label">Tamaño</label>
                 <div class="col-sm-8">
                     <input name="tamano" id="tamano" class="form-control" type="text" placeholder="Tamaño">
                 </div>
               </div>
               <div class="form-group">
                   <label for="edadadoptado" class="col-sm-3 control-label">Edad</label>
                   <div class="col-sm-8">
                       <input name="edadadoptado" id="edadadoptado" class="form-control"  type="text" placeholder="Edad">
                   </div>
               </div>
               <div class="form-group">
                   <label for="estadosalud" class="col-sm-3 control-label">Estado</label>
                   <div class="col-sm-8">
                       <input name="estadosalud" id="estadosalud" class="form-control"  type="text" placeholder="Estado de salud y cuidados especiales">
                   </div>
               </div>
               <div class="form-group">
                   <label for="fechanac" class="col-sm-3 control-label">Fecha de Nacimiento</label>
                   <div class="col-sm-8">
                       <input name="fechanac" id="fechanac" class="form-control"  type="date" placeholder="Fecha de Nacimiento">
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

    </div><!--aqui termina el row formulario-->
  </form><!--aqui termina el formulario-->


      </div><!--aqui termina el body de modal-->

          <div class="modal-footer">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg -12">
                <div class="form-group">
                  <p class="btnderecha">  <button  type="button" id="btnguardar" class="btn btn-primary btn-sm btn-labeled ">Guardar</button>
                    <button  type="button" id="btnactualizar" class="btn btn-info btn-sm btn-labeled ">Actualizar</button>
                   <button  type="button" data-dismiss="modal"  id="btncancelar" class="btn btn-danger btn-sm btn-labeled ">Cancelar</button></p>
                </div>
              </div>
            </div>
          </div><!--fin de foother modal.-->

          </div>
        </div>
      </div><!--fin del Modal-->

<<<<<<< HEAD
          $("#modal_form").click(function(){
=======
>>>>>>> e0c5a4091257358a5c9c769f57f47526a7f96274

<?php endblock('body'); ?>

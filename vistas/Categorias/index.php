<?php
require_once "../../vistas/base/base.php";
 ?>

 <?php startblock('body'); ?>
 <div class="panel panel-flat">
   <div class="panel-heading">
     <h5 class="panel-title">Categorias</h5>
     <div class="heading-elements">

      </a>
     </div>
   </div>

   <!--- aqui va lo del formulario--->
   <div class="form-group">

     <div class="table_responsive">
       <table class="table table-xs">
         <thead>
           <tr>
             <th>Codigo/ID</th>
             <th>Categoria</th>
             <th>Opciones</th>
           </tr>

           <tbody id="tabla1" class="tbody" ></tbody>

         </thead>

       </table>

     </div>

   </div> <!-- aqui termina la tabla-->
 </div><!--FIN de panel flat-->


<?php endblock('body'); ?>

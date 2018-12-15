<?php
require_once "../../vistas/base/base.php";
 ?>

 <?php startblock('body'); ?>
 <div class="panel panel-flat">
   <div class="panel-heading">
     <h5 class="panel-title">Titulo de la pagina</h5>
     <div class="heading-elements">
         <button type="button" class="btn btn-primary" onclick="abortar();">Large modal</button>
     </div>
   </div>
   <!--- aqui va lo del formulario --->
<script type="text/javascript">
function abortar(){
  $('#myModal').modal('toggle');
}
</script>


 </div><!--FIN de panel flat-->

 </div><!--FIN de panel flat-->


<?php endblock('body'); ?>

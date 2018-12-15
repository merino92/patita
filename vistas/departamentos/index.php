<?php require_once "../../vistas/base/base.php"; ?>
<?php startblock('body'); ?>


<div class=" panel panel-flat">

  <div class="panel-heading">
    <h3 class="panel-title">Departamentos</h3>
  </div>
  <div class="heading-elements">
<button type="button" class="btn btn-info btnderecha" data-toggle="modal" data-target="#modal_form">
Agregar Departamentos
</button>
  </div>

  <div class="table_responsive">
    <table class="table table-xs">
      <thead>
        <tr>
          <td>CODIGO</td>
          <td>NOMBRE</td>
          <td>CODIGO POSTAL</td>
        </tr>
      </thead>
      <tbody id="cuerpo" class="tbody">

      </tbody>
    </table>
  </div>
</div><!--fin del flat.-->



<?php endblock('body'); ?>

<?php startblock('js'); ?>
<script type="text/javascript" src="../../js/custom/departamento.js"></script>
<?php endblock('js'); ?>

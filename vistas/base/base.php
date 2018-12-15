<?php
session_start();
require_once '../../vistas/ti.php';

 ?>
 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PATITA</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css">
    <!-- Bootstrap core CSS. -->
    <link rel="stylesheet" href="../../css/barra.css">
      <link rel="stylesheet" href="../../css/botones.css">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/navegador.css" rel="stylesheet">
      <link href="../../css/plugin/sweetalert/sweetalert.css" rel="stylesheet">
      <link rel="stylesheet" href="../../css/plugin/datatable/dataTables.bootstrap.min.css">
      <script type="text/javascript" src="../../js/jquery-3.3.1.min.js" ></script>
      <script src="../../js/bootstrap.min.js"></script>

          <script src="../../js/plugins/sweetalert/sweetalert.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="../../js/vendor/holder.min.js"></script>
      <script type="text/javascript" src="../../js/plugins/jqvalidate/jquery.validate.min.js">

      </script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Echame una Pata </a>
         <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><img src="../../vistas/base/icono_menu.png" width="30" height="30" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

     <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo($_SESSION['usuario']); ?> <b class="caret"></b></a>
         <ul class="dropdown-menu">
           <li align="center" class="well">
               <div><img class="img-responsive" style="padding:2%;" src="../../imagenes/userdog.jpg"/><a class="change" href=""></a></div>
               <a href="#" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-user"><?php echo ($_SESSION['usuario']); ?></span> </a>
               <a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-share"></span>Salir</a>
           </li>
          </ul>
       </li>
     </ul>
   </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <div id="wrapper" >

       <!-- Sidebar -->
       <div  id="sidebar-wrapper">
           <ul class="sidebar-nav">
               <li class="sidebar-brand">
                   <a class="themeBtn2" href="#">
                       Menu
                   </a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/inicio/index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/Apadrinamiento/index.php"><span class="glyphicon glyphicon-user"></span>Apadrinamiento</a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/Voluntariados/index.php"><span class="glyphicon glyphicon-heart"></span> Voluntariados</a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/Adopciones/index.php"><span class="glyphicon glyphicon-heart-empty"></span> Adopciones</a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/Donaciones/index.php"><span class="showopacity glyphicon glyphicon-gift"></span> Donaciones</a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/InventarioMascotas/index.php"><span class="glyphicon glyphicon-th"></span>Inventario de mascotas</a>
               </li>
               <li>
                   <a class="themeBtn2" href="../../vistas/Productos/index.php"><span class="glyphicon glyphicon-th"></span>Productos</a>
               </li>
               <li>
                    <a class="themeBtn2" href="../../controlador/DepartamentoController.php"><span class="glyphicon glyphicon-globe"></span>Departamentos</a>
               </li>
               <li>
                    <a class="themeBtn2" href="../../controlador/MunicipioController.php"><span class="glyphicon glyphicon-globe"></span>Municipio</a>
               </li>
               <li>
                   <a class="themeBtn2" href="#">About</a>
               </li>
           </ul>
       </div>
       <div id="page-content-wrapper">
           <div class="container-fluid">


             <?php startblock("body"); ?>

             <?php endblock("body"); ?>

           </div>
       </div>
       <!-- /#page-content-wrapper -->

   </div>

   <script>
   $("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("toggled");
   });
   </script>
     </div>
       <!-- /#sidebar-wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


</div>
<?php startblock("js"); ?>
<?php endblock("js"); ?>
  </body>
</html>

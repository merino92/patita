
<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../../js/plugins/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../../css/login.css">

    <link rel="stylesheet" href="../../css/plugin/sweetalert/sweetalert.css">
  </head>
  <body>

    <div class="login-box">
      <img src="../../imagenes/echa.jpeg" class="avatar" alt="Avatar Imagen">
      <h1>Inicio de sesion</h1>
      <form>
        <!-- USERNAME INPUT -->
        <label for="Usuario">Nombre de usuario</label>
        <input type="text" placeholder="Ingrese Usuario" id="usuario">
        <!-- PASSWORD INPUT -->
        <label for="Contraseña">Contraseña</label>
        <input type="password" placeholder="Ingrese Contraseña" id="clave">
        <input type="button" onclick="Evaluar();" value="Log In">
        <a href="#">¿Olvido su Contraseña?</a><br>

      </form>
    </div>
    <script type="text/javascript" src="../../js/custom/login.js"></script>
  </body>
</html>

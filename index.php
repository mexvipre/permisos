<?php
require_once "./app/config/app.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= COMPANY ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= SERVERURL ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= SERVERURL ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= SERVERURL ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h3>App Permisos</h3>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>

      <form action="" method="post" id="formulario-login">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nomuser" placeholder="Nombre de usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="passuser" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Recordar </label>
            </div>
          </div>
        </div>
        <button class="btn btn-sm btn-primary btn-block" type="submit">Iniciar Sesión</button>
        <button class="btn btn-sm btn-danger btn-block" type="button">Recuperar Contraseña</button>
      </form>

      <p class="mb-1">
        <a href="mailto:jfrancia@senati.pe">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?= SERVERURL ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= SERVERURL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= SERVERURL ?>dist/js/adminlte.min.js"></script>

<script>
  // Espera a que el contenido de la página esté completamente cargado
  document.addEventListener("DOMContentLoaded", () => {
    // Selecciona el formulario por su ID
    const formulario = document.getElementById("formulario-login");

  
    formulario.addEventListener("submit", function(event) {

      event.preventDefault();


      const nomuser = document.getElementById("nomuser").value;
      const passuser = document.getElementById("passuser").value;

      
      fetch("http://localhost/permisos/app/controllers/Usuario.controller.php", {
        method: "POST", 
 
     
        body: new URLSearchParams({
          operation: 'login', 
          nomuser: nomuser, 
          passuser: passuser 
        })
      })
      .then(response => response.json()) 
      .then(data => {
        console.log(data); 
      })
      .catch(error => {
        console.error('Error:', error); 
      });
    });
  });
</script>

</body>
</html>

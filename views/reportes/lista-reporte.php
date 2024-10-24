<?php
require_once "../../app/config/app.php";
?>

<?php
require_once "../includes/header.php";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
       <?php echo renderContentHenader("lista reportes","Inicio",SERVERURL . "viwes")?>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Reportes</h3>
        <div style="text-align: right;">
            <a href="./registra-colaborador" class="btn btn-sm btn-primary">Registrar</a>
        </div>
    </div>
    

            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

   <?php
   // incluye las ultimas dos secciones : ASIDE   + FOOTER  Y <SCRIPT>
   require_once "../includes/footer.php"
   ?>
</body>

</html>
<?php
require_once "../../app/config/app.php";
?>

<?php
require_once "../includes/header.php";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     <?php echo renderContentHenader("Registrar Permisos","lista Permisos","./lista-permiso"); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">

              <form action="" autocomplete="off">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">Complete los datos del permiso</div>
                <div class="col-md-6 text-right">
                    <a href="./lista-permiso" class="btn btn-sm btn-primary">Mostrar lista</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="colaborador">Colaborador:</label>
                    <input type="text" class="form-control" id="colaborador" maxlength="40" name="colaborador" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="dia">Día:</label>
                    <input type="date" class="form-control" id="dia" name="dia" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de Permiso:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="vacaciones">Vacaciones</option>
                    <option value="licencia">Licencia</option>
                    <option value="enfermedad">Enfermedad</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-sm btn-outline-secondary" type="reset">Cancelar</button>
            <button class="btn btn-sm btn-primary" type="submit">Registrar</button>
        </div>
    </div>
</form>
           
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

<script>
  document.addEventListener("DOMContentLoaded",()=>{
    



    //eventos

    document.querySelector("#formulario-registro").addEventListener("submit",(event)=>{
      
      if(confirm("¿Desea guardar?")){
        console.log("Guardado Correctamente...");
      }
    })

    //disparadores 

  })
</script>

</body>

</html>
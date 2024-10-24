<?php
require_once "../../app/config/app.php";
?>

<?php
require_once "../includes/header.php";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     <?php echo renderContentHenader("Registrar Horarios","lista Horario","./lista-horario"); ?>
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
                <div class="col-md-6">Complete los datos del horario</div>
                <div class="col-md-6 text-right">
                    <a href="./lista-horario.php" class="btn btn-sm btn-primary">Mostrar lista</a>
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
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="hora_entrada">Hora de Entrada:</label>
                    <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="hora_salida">Hora de Salida:</label>
                    <input type="time" class="form-control" id="hora_salida" name="hora_salida" required>
                </div>
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
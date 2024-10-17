<?php
require_once "../../app/config/app.php";
?>

<?php
require_once "../includes/header.php";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     <?php echo renderContentHenader("Registro de Colaboradores","lista colaboradores","./lista-colaborador"); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">

                  <form action=""autocomplete = "off">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">Complete los datos</div>
                                <div class="col-md-6 text-right">
                                    <a href="./lista-colaborador" class="btn btn-sm btn-primary">Mostrar lista</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="40" name="nombre" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">Correo Electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="tel" class="form-control" pattern="[0-9]+" title="Solo se Permiten numeros" id="telefono" minlength="9" maxlength="9" name="telefono" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <textarea class="form-control" id="direccion" maxlength="50" name="direccion"></textarea>
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
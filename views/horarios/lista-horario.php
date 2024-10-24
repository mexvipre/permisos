<?php
require_once "../../app/config/app.php";
?>

<?php
require_once "../includes/header.php";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
       <?php echo renderContentHenader("Lista Horarios","Inicio",SERVERURL . "viwes")?>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">lista  de Persmisos </h3>
        <div style="text-align: right;">
            <a href="./registra-horario.php" class="btn btn-sm btn-primary">Registrar</a>
        </div>
    </div>
    <div class="card-body">
    <table class="table table-sm">
    <colgroup>
        <col style="width: 30%;">
        <col style="width: 30%;">
        <col style="width: 20%;">
        <col style="width: 20%;">
        <col style="width: 10%;">
    </colgroup>
    <thead>
        <tr>
            <th>Colaborador</th>
            <th>Día</th>
            <th>Hora de Entrada</th>
            <th>Hora de Salida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Juan Pérez</td>
            <td>2024-10-01</td>
            <td>08:00 AM</td>
            <td>05:00 PM</td>
            <td style="text-align: right;">
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>María López</td>
            <td>2024-10-05</td>
            <td>09:00 AM</td>
            <td>06:00 PM</td>
            <td style="text-align: right;">
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>Carlos García</td>
            <td>2024-10-10</td>
            <td>08:30 AM</td>
            <td>05:30 PM</td>
            <td style="text-align: right;">
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>Ana Torres</td>
            <td>2024-10-15</td>
            <td>08:00 AM</td>
            <td>04:00 PM</td>
            <td style="text-align: right;">
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>Pedro Ruiz</td>
            <td>2024-10-20</td>
            <td>09:00 AM</td>
            <td>06:00 PM</td>
            <td style="text-align: right;">
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total de horarios:</td>
            <td>5</td>
            <td></td>
        </tr>
    </tfoot>
</table>



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
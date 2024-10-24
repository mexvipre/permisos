<?php
require_once "../../app/config/app.php";
?>

<?php
require_once "../includes/header.php";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
       <?php echo renderContentHenader("lista colaboradores","Inicio",SERVERURL . "viwes")?>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Colaboradores</h3>
        <div style="text-align: right;">
            <a href="./registra-colaborador" class="btn btn-sm btn-primary">Registrar</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-sm">
            <colgroup>
                <col style="width: 50%;">
                <col style="width: 30%;">
                <col style="width: 20%;">
            </colgroup>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>juan@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@example.com</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total de colaboradores:</td>
                    <td>2</td>
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
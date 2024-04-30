<?php require_once("../../app/config.php"); ?>

<?php require_once("../../admin/layout/parte1.php"); ?>

<?php require_once("../../app/controller/roles/listado_de_roles.php");?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Listado de Categorias</h1>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Roles Registrados</h3>
                        <div class="card-tools">
                        <a href="create.php" class="btn btn-success"><i class="bi bi-plus-square mr-2"></i>Crear nuevo Rol</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Nº</th>
                            <th>Nombre Rol</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador_rol = 0;
                        foreach ($roles as $rol) {
                            $contador_rol = $contador_rol + 1?>
                        <tr>
                            <td class="text-center"><?=$contador_rol?></td>
                            <td><?=$rol['rol_name']?></td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary mr-2 btn-sm"><i class="bi bi-eye"></i></button>
                                    <button type="button" class="btn btn-success mr-2 btn-sm"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger  mr-2 btn-sm"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once("../../admin/layout/parte2.php");
require_once("../../layout/mensaje.php");
?>
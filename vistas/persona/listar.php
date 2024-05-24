<div class="content">



    <div class="container-fluid">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Administrar Personas</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Personas</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="<?= BASE_URL ?>articulo/crear">
                    Registrar Persona
                </a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de Personas</h3>



                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>

                                    <th>Telefono / Celular</th>
                                    <th>E-mail</th>
                                    <th>Departamento</th>

                                    <th>.::Acciones::.</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($listadoPersonas as $persona) : ?>

                                    <tr>
                                        <td><?= $persona["id_persona"] ?></td>
                                        <td><?= $persona["nombres"] ?> <?= $persona["apellidos"] ?></td>
                                        <td><?= $persona["telefono"] ?></td>
                                        <td><?= $persona["email"] ?></td>
                                        <td><?= $persona["departamento"] ?></td>

                                        <td>
                                            <a href="<?= BASE_URL ?>persona/editar/<?= $persona["id_persona"] ?>" class="btn btn-warning">Editar</a>
                                            <a href="<?= BASE_URL ?>persona/eliminar/<?= $persona["id_persona"] ?>" class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar este registro?')">Eliminar</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
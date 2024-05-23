<div class="content">



    <div class="container-fluid">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Administrar Categorias</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Categorias</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="<?= BASE_URL?>categoria/crear">
                    Registrar
                </a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de Categorias</h3>



                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>.::Acciones::.</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($listadoCategorias as $categoria) : ?>
                                
                                <tr>
                                    <td><?= $categoria["id_categoria"]?></td>
                                    <td><?= $categoria["categoria"]?></td>
                                    <td>
                                        <a href="<?= BASE_URL?>categoria/editar/<?= $categoria["id_categoria"]?>" class="btn btn-warning">Editar</a>
                                        <a href="<?= BASE_URL?>categoria/eliminar/<?= $categoria["id_categoria"]?>" 
                                        class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar este registro?')"
                                        >Eliminar</a>
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
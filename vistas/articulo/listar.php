<div class="content">



    <div class="container-fluid">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Administrar Articulos</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Articulos</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="<?= BASE_URL?>articulo/crear">
                    Registrar
                </a>

                <a class="btn btn-danger mx-5" href="<?= BASE_URL?>articulo/reporte" target="_brank">
                    Reporte
                </a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de Articulos</h3>



                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Imagen</th>

                                    <th>Nombre Articulo</th>
                                    <th>Descripcion</th>
                                    <th>Fecha Adquisicion</th>
                                    <th>Costo</th>
                                    <th>Categoria</th>
                                    <th>Responsable</th>
                                    <th>Estado</th>

                                    <th>.::Acciones::.</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($listadoArticulos as $articulo) : ?>
                                
                                <tr>
                                    <td><?= $articulo["id_articulo"]?></td>

                                    <td>

                                        <img src="<?= BASE_URL?>subidas/<?= $articulo["imagen"]?>" alt="imagen del producto" width="50">
                                    </td>
                                    <td><?= $articulo["nombre_articulo"]?></td>
                                    <td><?= $articulo["descripcion"]?></td>
                                    <td><?= $articulo["fecha_adquisicion"]?></td>
                                    <td><?= $articulo["costo_adquisicion"]?></td>
                                    <td><?= $articulo["categoria"]?></td>
                                    <td>
                                        <?= $articulo["nombres"]?>
                                        <?= $articulo["apellidos"]?>
                                </td>
                                    <td><?= $articulo["estado"]?></td>
                                    <td>
                                        <!-- <a href="<?= BASE_URL?>articulo/editar/<?= $articulo["id_articulo"]?>" class="btn btn-warning">Editar</a> -->
                                        <a href="<?= BASE_URL?>articulo/eliminar/<?= $articulo["id_articulo"]?>" 
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
<?php

$estados = [
    'NUEVO', 'BUEN ESTADO', 'MAL ESTADO', 'DESECHADO'
];

?>

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
                            <li class="breadcrumb-item active">Crear</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="row">


            <div class="col-6">

                <?= erroresValidacion(); ?>


                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registrar Articulo</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="<?= BASE_URL ?>articulo/registrar" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre_articulo">Nombre del Articulo</label>
                                <input type="text" class="form-control" id="nombre_articulo" name="nombre_articulo" placeholder="Ingrese Nombre del Articulo">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <textarea type="password" class="form-control" id="descripcion" name="descripcion" placeholder="breve descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen">
                                        <label class="custom-file-label" for="exampleInputFile">Buscar Archivo</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Subir Imagen</span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="fecha_adquisicion">Fecha Adquisicion</label>
                                    <input type="date" class="form-control" id="fecha_adquisicion" name="fecha_adquisicion" placeholder="breve descripcion">
                                </div>
                                <div class="form-group col-6">
                                    <label for="costo_adquisicion">Costo Adquisicion</label>
                                    <input type="number" class="form-control" id="costo_adquisicion" name="costo_adquisicion" placeholder="Bs.">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="id_categoria">Categoria</label>
                                    <select class="custom-select" id="id_categoria" name="id_categoria">
                                        <option value="">Seleccione</option>

                                        <?php foreach ($categorias as $categoria) :  ?>
                                            <option value="<?= $categoria["id_categoria"] ?>"><?= $categoria["categoria"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">

                                    <label for="id_persona_responsable">Persona Responsable</label>
                                    <select class="custom-select" id="id_persona_responsable" name="id_persona_responsable">
                                        <option value="">Seleccione</option>

                                        <?php foreach ($personas as $persona) :  ?>
                                            <option value="<?= $persona["id_persona"] ?>"><?= $persona["nombres"] . " " . $persona["apellidos"] ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="estado">Estado del Articulo</label>
                                    <select class="custom-select" id="estado" name="estado">
                                        <option value="">Seleccione</option>

                                        <?php foreach ($estados as $estado) :  ?>
                                            <option value="<?= $estado ?>" <?= ($persona["estado"] ?? "") == $estado ? "selected" : "" ?>><?= $estado ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
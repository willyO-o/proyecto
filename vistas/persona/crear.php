<?php

$titulo = empty($persona["id_persona"]) ? "Registrar Persona" : "Editar Persona";

$accion = empty($persona["id_persona"]) ? "registrar" : "actualizar";

?>


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
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>principal">Inicio</a></li>
                            <li class="breadcrumb-item active">Personas</li>
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
                        <h3 class="card-title"><?= $titulo ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="<?= BASE_URL ?>persona/<?= $accion ?>">


                        <?php if (!empty($persona["id_persona"])) : ?>
                            <input type="hidden" name="id_persona" value="<?= $persona["id_persona"] ?>">
                        <?php endif; ?>


                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombres">nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?= $persona["nombres"] ?? "" ?>" placeholder="Ingrese Nombres">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $persona["apellidos"] ?? "" ?>" placeholder="Ingrese Apellidos">
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono / Celular</label>
                                <input type="number" class="form-control" id="telefono" name="telefono" value="<?= $persona["telefono"] ?? "" ?>" placeholder="Ingrese su numero telefonico">
                            </div>
                            <div class="row">

                                <div class="form-group col-6">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo" value="<?= $persona["correo"] ?? "" ?>" placeholder="por ejemplo: alguien@gmail.com">
                                </div>
                                <div class="form-group col-6">
                                    <label for="clave">clave </label>
                                    <input type="password" class="form-control" id="clave" name="clave" value="" placeholder="Ingrese su clave de usario">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="rol">Rol</label>
                                    <select class="custom-select" id="rol" name="rol">
                                        <option value="">Seleccione</option>
                                        <option value="usuario" <?= ($persona["rol"] ?? "") == "usuario" ? "selected" : "" ?>>Usuario</option>
                                        <option value="administrador" <?= ($persona["rol"] ?? "") == "administrador" ? "selected" : "" ?>>Administrador</option>
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label for="estado">Estado</label>

                                    <select class="custom-select" id="estado" name="estado">
                                        <option value="">Seleccione</option>
                                        <option value="ACTIVO" <?= ($persona["estado"] ?? "") == "ACTIVO" ? "selected" : "" ?>>ACTIVO</option>
                                        <option value="INACTIVO" <?= ($persona["estado"] ?? "") == "INACTIVO" ? "selected" : "" ?>>INACTIVO</option>
                                    </select>

                                </div>


                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                                GUARDAR
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
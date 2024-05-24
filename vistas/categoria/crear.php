

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
                            <li class="breadcrumb-item active">Crear</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="row">


            <div class="col-6">

                <?= erroresValidacion() ?>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> <?= isset($categoria["id_categoria"]) ? "Editar": "Registrar" ?> Categoria</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="<?=BASE_URL?>categoria/<?= isset($categoria["id_categoria"]) ? "actualizar": "registrar" ?>">
                        <div class="card-body">

                        <?php
                            if (isset($categoria["id_categoria"])) {
                                echo "<input type='hidden' name='id_categoria' value='{$categoria["id_categoria"]}'>";
                            }
                        ?>
                            <div class="form-group">
                                <label for="categoria">Nombre Categoria</label>
                                <input type="text" class="form-control" name="categoria" id="categoria"  value="<?=$categoria["categoria"] ?? ""?>" placeholder="ingrese nombre de la categoria" >
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><?= isset($categoria["id_categoria"]) ? "ACTUALIZAR": "REGISTRAR" ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
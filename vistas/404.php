<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>
    <div style="width: 100%; text-align: center;">
        <h1>404</h1>

        <h2>Pagina no encontrada</h2>

        <p>Error: <strong><?= $mensajeExcepcion ?? "" ?></strong></p>
        <a href="<?= BASE_URL ?>">Volver al inicio</a>

    </div>

</body>

</html>
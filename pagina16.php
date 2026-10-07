<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 16: Formulario (nombre)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 16: Formulario (nombre)</h5>
    <p class="text-muted small">Formulario que envía el nombre por POST a proceso.php.</p>
    <div class="border rounded p-3 bg-white">
        <!-- El formulario envía los datos a proceso.php con el método post -->
        <form method="post" action="proceso.php">
            Ingrese su nombre:
            <input type="text" name="nombre" class="form-control">
            <br>
            <input type="submit" value="confirmar" class="btn btn-light border">
        </form>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

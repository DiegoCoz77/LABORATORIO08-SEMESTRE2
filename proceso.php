<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso: Captura de datos del formulario</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Proceso: Captura de datos del formulario</h5>
    <p class="text-muted small">Muestra el nombre que se ingresó en la página 16.</p>
    <div class="border rounded p-3 bg-white">
<?php
// $_REQUEST guarda los datos enviados por el formulario
// "nombre" es el name del cuadro de texto (distingue mayúsculas y minúsculas)
echo "El nombre ingresado es: ";
echo htmlspecialchars($_REQUEST['nombre'] ?? '');
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

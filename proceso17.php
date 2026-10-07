<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso 17: Captura de datos del formulario</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Proceso 17: Captura de datos del formulario</h5>
    <p class="text-muted small">Muestra el nombre y dice si la persona es mayor de edad.</p>
    <div class="border rounded p-3 bg-white">
<?php
// Recogemos los datos del formulario
echo htmlspecialchars($_REQUEST['nombre'] ?? '');
echo "<br>";

// Si la edad es 18 o más, es mayor de edad
if (($_REQUEST['edad'] ?? 0) >= 18) {
    echo "Es mayor de edad";
} else {
    echo "No es mayor de edad";
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

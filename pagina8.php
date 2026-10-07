<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 8: Estructura if / elseif</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 8: Estructura if / elseif</h5>
    <p class="text-muted small">El mismo ejemplo de los dígitos, resuelto con if / elseif / else.</p>
    <div class="border rounded p-3 bg-white">
<?php
$valor = rand(1, 100);
echo "El valor sorteado es $valor<br>";

// elseif permite agregar otra condición en la misma línea
if ($valor <= 9) {
    echo "Tiene un dígito";
} elseif ($valor < 100) {
    echo "Tiene 2 dígitos";
} else {
    echo "Tiene 3 dígitos";
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

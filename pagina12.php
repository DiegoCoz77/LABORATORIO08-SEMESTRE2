<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 12: Estructura repetitiva for</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 12: Estructura repetitiva for</h5>
    <p class="text-muted small">Imprimir los números del 1 al 100 con for.</p>
    <div class="border rounded p-3 bg-white">
<?php
// for (inicio; condición; incremento)
for ($f = 1; $f <= 100; $f++) {
    echo $f;
    echo "<br>";
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

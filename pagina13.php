<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 13: Estructura repetitiva while</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 13: Estructura repetitiva while</h5>
    <p class="text-muted small">Generar un número aleatorio del 1 al 100 e imprimir la secuencia desde 1 hasta ese valor.</p>
    <div class="border rounded p-3 bg-white">
<?php
$valor = rand(1, 100);   // límite aleatorio
$inicio = 1;             // contador

// while revisa la condición antes de entrar al bloque
while ($inicio <= $valor) {
    echo $inicio;
    echo "<br>";
    $inicio++;           // aumentamos el contador en 1
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

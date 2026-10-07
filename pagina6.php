<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 6: Estructura condicional (if - else)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 6: Estructura condicional (if - else)</h5>
    <p class="text-muted small">Número aleatorio del 1 al 10: indicar si es menor o igual a 5, o mayor a 5.</p>
    <div class="border rounded p-3 bg-white">
<?php
// Generamos un número entero aleatorio entre 1 y 10
$valor = rand(1, 10);
echo "El valor sorteado es $valor<br>";

// Estructura condicional if - else
if ($valor <= 5) {
    echo "Es menor o igual a 5";   // se cumple la condición
} else {
    echo "Es mayor a 5";           // no se cumple la condición
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

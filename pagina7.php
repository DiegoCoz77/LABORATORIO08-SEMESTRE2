<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 7: Estructura condicional anidada</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 7: Estructura condicional anidada</h5>
    <p class="text-muted small">Número aleatorio del 1 al 100: determinar cuántos dígitos tiene con if - else anidados.</p>
    <div class="border rounded p-3 bg-white">
<?php
// Generamos un número entero aleatorio entre 1 y 100
$valor = rand(1, 100);
echo "El valor sorteado es $valor<br>";

if ($valor <= 9) {
    echo "Tiene un dígito";
} else {
    // if anidado: solo se revisa si el primer if fue falso
    if ($valor < 100) {
        echo "Tiene 2 dígitos";
    } else {
        echo "Tiene 3 dígitos";
    }
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

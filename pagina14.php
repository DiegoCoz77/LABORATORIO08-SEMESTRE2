<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 14: Problema resuelto (while con la fecha)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 14: Problema resuelto (while con la fecha)</h5>
    <p class="text-muted small">Obtener el día actual del mes e imprimir la secuencia desde 1 hasta ese día con while.</p>
    <div class="border rounded p-3 bg-white">
<?php
// Zona horaria de Perú, para que el día sea el correcto
date_default_timezone_set('America/Lima');

// Mostramos los números de los días del 1 a la fecha actual
$dia = date("d");    // día del mes en dos dígitos
$inicio = 1;
while ($inicio <= $dia) {
    echo $inicio . "<br>";
    $inicio++;
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

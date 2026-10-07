<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1: if / else if contra switch</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Ejemplo 1: if / else if contra switch</h5>
    <p class="text-muted small">El mismo resultado obtenido con if y con switch (variable = 2).</p>
    <div class="border rounded p-3 bg-white">
<?php
$variable = 2;

// ---------- Versión con if ----------
echo "<b>Con if:</b><br>";
if ($variable == 1) {
    echo '$variable es igual a 1.';
} elseif ($variable == 2) {
    echo '$variable es igual a 2.';
} elseif ($variable == 3) {
    echo '$variable es igual a 3.';
} else {
    echo '$variable no es igual a 1, 2 o 3.';
}

echo "<br><br>";

// ---------- Versión con switch ----------
echo "<b>Con switch:</b><br>";
switch ($variable) {
    case 1:
        echo '$variable es igual a 1.';
        break;               // break evita que siga con los demás casos
    case 2:
        echo '$variable es igual a 2.';
        break;
    case 3:
        echo '$variable es igual a 3.';
        break;
    default:
        echo '$variable no es igual a 1, 2 o 3.';   // si no coincide ningún caso
        break;
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

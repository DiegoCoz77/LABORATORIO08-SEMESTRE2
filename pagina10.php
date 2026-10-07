<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 10: Problema propuesto (uno, dos, tres)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 10: Problema propuesto (uno, dos, tres)</h5>
    <p class="text-muted small">Número aleatorio del 1 al 3: mostrar su nombre en texto con if - else anidados.</p>
    <div class="border rounded p-3 bg-white">
<?php
// Generamos un número entero aleatorio entre 1 y 3
$num = rand(1, 3);

if ($num == 1) {
    echo "uno";
} else {
    // if anidado: se revisa solo si el número no es 1
    if ($num == 2) {
        echo "dos";
    } else {
        echo "tres";   // si no es 1 ni 2, entonces es 3
    }
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

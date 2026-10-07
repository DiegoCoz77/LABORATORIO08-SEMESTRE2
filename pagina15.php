<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 15: Problema propuesto (pares del 2 al 20)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 15: Problema propuesto (pares del 2 al 20)</h5>
    <p class="text-muted small">Serie de números pares del 2 al 20 con for, while y do/while.</p>
    <div class="border rounded p-3 bg-white">
<?php
// ---------- 1. Con FOR ----------
echo "Serie de números pares del 2 al 20 con el for";
echo "<br>";
for ($f = 2; $f <= 20; $f = $f + 2) {
    echo $f;
    echo "-";
}

// ---------- 2. Con WHILE ----------
echo "<br>";
echo "Serie de números pares del 2 al 20 con el while";
echo "<br>";
$f = 2;                  // reiniciamos el contador
while ($f <= 20) {
    echo $f;
    echo "-";
    $f = $f + 2;
}

// ---------- 3. Con DO / WHILE ----------
echo "<br>";
echo "Serie de números pares del 2 al 20 con el do/while";
echo "<br>";
$f = 2;                  // reiniciamos el contador
do {
    echo $f;
    echo "-";
    $f = $f + 2;
} while ($f <= 20);      // aquí la condición va al final y lleva punto y coma
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

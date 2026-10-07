<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 11: Ejercicio propuesto (switch)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h5 class="fw-bold">Página 11: Ejercicio propuesto (switch)</h5>
    <p class="text-muted small">Representar un día de la semana con un número (1 = Lunes ... 7 = Domingo) usando switch.</p>
    <div class="border rounded p-3 bg-white">
<?php
// Número del día (1 = Lunes hasta 7 = Domingo). Cámbialo para probar.
$dia = 4;

switch ($dia) {
    case 1:
        echo "Hoy es Lunes";
        break;
    case 2:
        echo "Hoy es Martes";
        break;
    case 3:
        echo "Hoy es Miércoles";
        break;
    case 4:
        echo "Hoy es Jueves";
        break;
    case 5:
        echo "Hoy es Viernes";
        break;
    case 6:
        echo "Hoy es Sábado";
        break;
    case 7:
        echo "Hoy es Domingo";
        break;
    default:
        // valores fuera del rango 1 al 7
        echo "El número de día no corresponde";
        break;
}
?>
    </div>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

<?php
/*
 * EJERCICIO 3: Estación del año según día y mes
 * - Verano:    21 dic al 20 mar
 * - Otoño:     21 mar al 21 jun
 * - Invierno:  22 jun al 22 sep
 * - Primavera: 23 sep al 20 dic
 */
/* Devuelve lo que el usuario escribió para que no se borre al calcular */
function valor($campo)
{
    return isset($_POST[$campo]) ? htmlspecialchars($_POST[$campo]) : '';
}

$estacion = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $d = (int) $_POST['dia'];   // Entrada: día (d)
    $m = (int) $_POST['mes'];   // Entrada: mes (m)

    // checkdate() verifica que la fecha exista (se usa el año 2026)
    if (checkdate($m, $d, 2026)) {

        // Unimos mes y día en un solo número: 15 de octubre -> 1015
        // Así es más fácil comparar los rangos
        $fecha = $m * 100 + $d;

        if ($fecha >= 1221 || $fecha <= 320) {
            $estacion = 'VERANO';       // 21 dic - 20 mar
        } elseif ($fecha <= 621) {
            $estacion = 'OTOÑO';        // 21 mar - 21 jun
        } elseif ($fecha <= 922) {
            $estacion = 'INVIERNO';     // 22 jun - 22 sep
        } else {
            $estacion = 'PRIMAVERA';    // 23 sep - 20 dic
        }
    } else {
        $error = 'Ingresa un día y un mes que existan (ej: día 15, mes 10).';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3: Estación del año</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado { background-color: #e9ecef; }
    </style>
</head>
<body>
<div class="container py-4" style="max-width: 420px;">
    <h5 class="fw-bold mb-3">Ejercicio 3</h5>
    <form method="post">
        <div class="row mb-2">
            <label class="col-5 col-form-label">Día</label>
            <div class="col-7">
                <input type="number" name="dia" class="form-control" min="1" max="31" value="<?= valor('dia') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Mes</label>
            <div class="col-7">
                <input type="number" name="mes" class="form-control" min="1" max="12" value="<?= valor('mes') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Estación</label>
            <div class="col-7">
                <input type="text" class="form-control resultado" readonly value="<?= $estacion ?>">
            </div>
        </div>
        <?php if ($error) { ?><div class="alert alert-danger"><?= $error ?></div><?php } ?>
        <button type="submit" class="btn btn-light border ">Calcular</button>
    </form>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

<?php
/*
 * EJERCICIO 2: Tipo de clima según la temperatura
 * - Menor a 10  -> Frío
 * - 10 a 20     -> Nublado
 * - 21 a 30     -> Calor
 * - Mayor a 30  -> Tropical
 */
/* Devuelve lo que el usuario escribió para que no se borre al calcular */
function valor($campo)
{
    return isset($_POST[$campo]) ? htmlspecialchars($_POST[$campo]) : '';
}

$clima = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (is_numeric($_POST['temperatura'])) {
        $t = (float) $_POST['temperatura'];  // Entrada: temperatura (t)

        // if / elseif / else para revisar cada rango
        if ($t < 10) {
            $clima = 'FRÍO';
        } elseif ($t <= 20) {
            $clima = 'NUBLADO';
        } elseif ($t <= 30) {
            $clima = 'CALOR';
        } else {
            $clima = 'TROPICAL';
        }
    } else {
        $error = 'Ingresa una temperatura válida.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2: Tipo de clima</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado { background-color: #e9ecef; }
    </style>
</head>
<body>
<div class="container py-4" style="max-width: 420px;">
    <h5 class="fw-bold mb-3">Ejercicio 2</h5>
    <form method="post">
        <div class="row mb-2">
            <label class="col-5 col-form-label">Temperatura</label>
            <div class="col-7">
                <input type="number" name="temperatura" class="form-control" step="0.1" value="<?= valor('temperatura') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Clima</label>
            <div class="col-7">
                <input type="text" class="form-control resultado" readonly value="<?= $clima ?>">
            </div>
        </div>
        <?php if ($error) { ?><div class="alert alert-danger"><?= $error ?></div><?php } ?>
        <button type="submit" class="btn btn-light border ">Calcular</button>
    </form>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

<?php
/*
 * EJERCICIO 4: Precio según producto y calidad
 * Se usa una matriz (arreglo de arreglos): $precios[producto][calidad]
 */
/* Devuelve lo que el usuario escribió para que no se borre al calcular */
function valor($campo)
{
    return isset($_POST[$campo]) ? htmlspecialchars($_POST[$campo]) : '';
}

$precio = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $c = (int) $_POST['calidad'];    // Entrada: calidad (c)
    $p = (int) $_POST['producto'];   // Entrada: producto (p)

    // Tabla de precios del enunciado
    $precios = [
        1 => [1 => 5000, 2 => 4500, 3 => 4000],  // producto 1
        2 => [1 => 4500, 2 => 4000, 3 => 3500],  // producto 2
        3 => [1 => 4000, 2 => 3500, 3 => 3000],  // producto 3
    ];

    // Validamos que producto y calidad estén entre 1 y 3
    if ($p >= 1 && $p <= 3 && $c >= 1 && $c <= 3) {
        $precio = $precios[$p][$c];
    } else {
        $error = 'La calidad y el producto deben ser 1, 2 o 3.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4: Precio según producto y calidad</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado { background-color: #e9ecef; }
    </style>
</head>
<body>
<div class="container py-4" style="max-width: 420px;">
    <h5 class="fw-bold mb-3">Ejercicio 4</h5>
    <form method="post">
        <div class="row mb-2">
            <label class="col-5 col-form-label">Calidad</label>
            <div class="col-7">
                <input type="number" name="calidad" class="form-control" min="1" max="3" value="<?= valor('calidad') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Producto</label>
            <div class="col-7">
                <input type="number" name="producto" class="form-control" min="1" max="3" value="<?= valor('producto') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Precio</label>
            <div class="col-7">
                <input type="text" class="form-control resultado" readonly value="<?= $precio ?>">
            </div>
        </div>
        <?php if ($error) { ?><div class="alert alert-danger"><?= $error ?></div><?php } ?>
        <button type="submit" class="btn btn-light border ">Calcular</button>
    </form>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

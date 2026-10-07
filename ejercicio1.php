<?php
/*
 * EJERCICIO 1: Descuento, impuesto e importe a pagar
 * - Consumo hasta S/.100  -> descuento del 10 %
 * - Consumo mayor a 100   -> descuento del 20 %
 * - En ambos casos el impuesto es 19 % (sobre lo ya descontado)
 */
/* Devuelve lo que el usuario escribió para que no se borre al calcular */
function valor($campo)
{
    return isset($_POST[$campo]) ? htmlspecialchars($_POST[$campo]) : '';
}

$resultado = null; // aquí se guardan las salidas
$error = '';       // mensaje si el dato no es válido

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (is_numeric($_POST['consumo']) && $_POST['consumo'] >= 0) {
        $c = (float) $_POST['consumo'];      // Entrada: consumo (c)

        // Condicional: elegimos el porcentaje de descuento
        if ($c <= 100) {
            $m_d = $c * 0.10;                // 10 %
        } else {
            $m_d = $c * 0.20;                // 20 %
        }

        $m_igv = ($c - $m_d) * 0.19;         // impuesto del 19 %
        $p = ($c - $m_d) + $m_igv;           // importe a pagar

        $resultado = ['d' => $m_d, 'igv' => $m_igv, 'p' => $p];
    } else {
        $error = 'Ingresa un consumo valido (número mayor o igual a 0).';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1: Descuento, impuesto e importe a pagar</title>
    <!-- Bootstrap 5 (archivo local, no necesita inter) -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado { background-color: #e9ecef; }
    </style>
</head>
<body>
<div class="container py-4" style="max-width: 420px;">
    <h5 class="fw-bold mb-3">Ejercicio 1</h5>
    <form method="post">
        <div class="row mb-2">
            <label class="col-5 col-form-label">Consumo</label>
            <div class="col-7">
                <input type="number" name="consumo" class="form-control" step="0.01" value="<?= valor('consumo') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Monto descuento</label>
            <div class="col-7">
                <input type="text" class="form-control resultado" readonly value="<?= $resultado ? number_format($resultado['d'], 2) : '' ?>">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Impuesto IGV</label>
            <div class="col-7">
                <input type="text" class="form-control resultado" readonly value="<?= $resultado ? number_format($resultado['igv'], 2) : '' ?>">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Importe a pagar</label>
            <div class="col-7">
                <input type="text" class="form-control resultado" readonly value="<?= $resultado ? number_format($resultado['p'], 2) : '' ?>">
            </div>
        </div>
        <?php if ($error) { ?><div class="alert alert-danger"><?= $error ?></div><?php } ?>
        <button type="submit" class="btn btn-light border ">Calcular</button>
    </form>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

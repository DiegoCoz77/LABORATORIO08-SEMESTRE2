<?php
/*
 * EJERCICIO 5: Cantidad de positivos y negativos en un rango
 * Se resuelve con las 3 estructuras repetitivas: While, Do While y For.
 * El cero no es positivo ni negativo, por eso no se cuenta.
 */
/* Devuelve lo que el usuario escribió para que no se borre al calcular */
function valor($campo)
{
    return isset($_POST[$campo]) ? htmlspecialchars($_POST[$campo]) : '';
}

$res = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ni = (int) $_POST['ni'];   // Entrada: número inicial (ni)
    $nf = (int) $_POST['nf'];   // Entrada: número final (nf)

    if ($ni <= $nf) {

        // ---------- a) WHILE ----------
        // Primero revisa la condición y luego ejecuta
        $cp_w = 0; $cn_w = 0;
        $i = $ni;
        while ($i <= $nf) {
            if ($i > 0) {
                $cp_w++;        // positivo
            } elseif ($i < 0) {
                $cn_w++;        // negativo
            }
            $i++;               // siguiente número
        }

        // ---------- b) DO WHILE ----------
        // Ejecuta una vez y luego revisa la condición
        $cp_d = 0; $cn_d = 0;
        $i = $ni;
        do {
            if ($i > 0) {
                $cp_d++;
            } elseif ($i < 0) {
                $cn_d++;
            }
            $i++;
        } while ($i <= $nf);

        // ---------- c) FOR ----------
        // Inicio, condición y avance en una sola línea
        $cp_f = 0; $cn_f = 0;
        for ($i = $ni; $i <= $nf; $i++) {
            if ($i > 0) {
                $cp_f++;
            } elseif ($i < 0) {
                $cn_f++;
            }
        }

        $res = [
            'while'   => [$cp_w, $cn_w],
            'dowhile' => [$cp_d, $cn_d],
            'for'     => [$cp_f, $cn_f],
        ];
    } else {
        $error = 'El número inicial no puede ser mayor que el número final.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 5: Positivos y negativos (While, Do While, For)</title>
    <!-- Bootstrap 5 (archivo local, no necesita internet) -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado { background-color: #e9ecef; }
    </style>
</head>
<body>
<div class="container py-4" style="max-width: 420px;">
    <h5 class="fw-bold mb-3">Ejercicio 5</h5>
    <form method="post">
        <div class="row mb-2">
            <label class="col-5 col-form-label">Num. Inicial</label>
            <div class="col-7">
                <input type="number" name="ni" class="form-control"  value="<?= valor('ni') ?>" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-5 col-form-label">Num. Final</label>
            <div class="col-7">
                <input type="number" name="nf" class="form-control"  value="<?= valor('nf') ?>" required>
            </div>
        </div>
        <?php if ($error) { ?><div class="alert alert-danger"><?= $error ?></div><?php } ?>
        <button type="submit" class="btn btn-light border mb-3">Calcular</button>
    </form>

    <table class="table table-bordered table-sm text-center mb-0">
        <thead>
            <tr><th>Estructura</th><th>Cant. Positivos</th><th>Cant. Negativos</th></tr>
        </thead>
        <tbody>
            <tr><td>a) While</td><td class="resultado"><?= $res ? $res['while'][0] : '' ?></td><td class="resultado"><?= $res ? $res['while'][1] : '' ?></td></tr>
            <tr><td>b) Do While</td><td class="resultado"><?= $res ? $res['dowhile'][0] : '' ?></td><td class="resultado"><?= $res ? $res['dowhile'][1] : '' ?></td></tr>
            <tr><td>c) For</td><td class="resultado"><?= $res ? $res['for'][0] : '' ?></td><td class="resultado"><?= $res ? $res['for'][1] : '' ?></td></tr>
        </tbody>
    </table>
    <a href="index.php" class="d-block mt-4 small">Volver al índice</a>
</div>
</body>
</html>

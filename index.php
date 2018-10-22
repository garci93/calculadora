<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        require 'auxiliar.php';

        const OP = ['+','-','*','/'];
        const PAR = ['op', 'op1', 'op2'];

        function selected ($op1, $op2)
        {
            return $op1 == $op2 ? "selected" : "";
        }

        $op1 = $op2 = $op = null;
        $error = [];

        // Comprobación de parámetros:
        $par = array_keys($_GET);
        sort($par);
        if (empty($_GET)) {
            $op1 = '0';
            $op2 = '0';
            $op = '+';
        } elseif ($par == PAR) {
            $op1 = trim($_GET['op1']);
            $op2 = trim($_GET['op2']);
            $op = trim($_GET['op']);
        } else {
            $error = "Los parámetros recibidos no son los correctos.";
        }

        $res = '';

        if (empty($error)){
            // Comprobación de valores:
            if (!is_numeric($op1)) {
                $error[] = "El primer operando no es un número.";
            }
            if (!is_numeric($op2)) {
                $error[] = "El segundo operando no es un número.";
            }
            if (!in_array($op, OP)) {
                $error[] = "El operador no es válido.";
            }
        }
        formulario($op1, $op2, $op, OP);

        if (empty($error)):
            $res = '';
            switch($op) {
                case '+':
                    $res = $op1+$op2;
                    break;
                case '-':
                    $res = $op1-$op2;
                    break;
                case '*':
                    $res = $op1*$op2;
                    break;
                case '/':
                    $res = $op1/$op2;
                    break;
            }
            ?>
            <h3>Resultado: <?= $res ?></h3>
        <?php else: ?>
            <?php foreach ($error as $err): ?>
                <h3>Error: <?= $err ?></h3>
            <?php endforeach;
        endif; ?>
    </body>
</html>

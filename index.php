<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        $op1 = isset($_GET['op1']) ? trim($_GET['op1']) : '0';
        $op2 = isset($_GET['op2']) ? trim($_GET['op2']) : '0';
        $oper = isset($_GET['oper']) ? trim($_GET['oper']) : '+';
        $res = '';
        switch($oper) {
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
        <form action="" method="get">
            <label for="op1">Primer operando:</label>
            <input id="op1" type="text" name="op1" value="<?= $op1 ?>">
            <br>
            <label for="op2">Segundo operando:</label>
            <input id="op2" type="text" name="op2" value="<?= $op2 ?>">
            <br>
            <label for="oper">Operador:</label>
            <input id="oper" type="text" name="oper" value="<?= $oper ?>">
            <br>
            <input type="submit" value="Calcular">
        </form>
        <h3>Resultado: <?= $res ?></h3>
    </body>
</html>

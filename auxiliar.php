<?php function formulario($op1, $op2, $op, $ops)
{
?>
    <form action="" method="get">
        <label for="op1">Primer operando:</label>
        <input id="op1" type="text" name="op1" value="<?= $op1 ?>"><br/>
        <label for="op2">Segundo operando:</label>
        <input id="op2" type="text" name="op2" value="<?= $op2 ?>"><br/>
        <label for="op">Operador:</label>
        <select name="op">
            <?php foreach ($ops as $o): ?>
                <option value="<?= $o ?>" <?= selected($op, "o") ?> >
                    <?= $o ?>
                </option>
            <?php endforeach ?>
        </select><br/>
        <input type="submit" value="Calcular">
    </form>
<?php
}

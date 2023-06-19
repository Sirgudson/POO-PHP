<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
</head>

<body>
    <form action="129.php" method="post">
        Selecione o valor incial:
        <select name="inicial" id="inicial">
            <?php
            for ($i = 1; $i <= 100; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select><br>
        Selecione o valor final:
        <select name="final" id="final">
            <?php
            for ($i = 1; $i <= 100; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select><br>

        Mostrar: <br>
        <select name="mostrar" id="mostrar">
            <option value="all">Todos</option>
            <option value="par">Apenas os pares</option>
            <option value="imp">Apenas os impares</option><br>
            <input type="submit" value="Mostrar a Sequência">
        </select>
    </form>
</body>

</html>
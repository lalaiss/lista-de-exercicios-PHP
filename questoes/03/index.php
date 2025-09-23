<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>
    <!-- implementação da solução -->

    <form  method = "post">
         Escreva o valor que você ganha por horas trabalhadas: <input type="number" name="horas" required>
         <br> Escreva a quantidade de horas trabalhadas no mês: <input type="number" name="mes" required>
         <br> <input type="submit" value="Enviar">
    </form>

    <?php
        $horas= $_POST ['horas'];
        $mes= $_POST ['mes'];

        $resultado = $horas * $mes;

        echo " O salário mensal será de : R$" . $resultado . ",00";

    ?>
    </main>
</body>


</html>
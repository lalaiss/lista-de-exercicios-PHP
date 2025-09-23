<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>
    <!-- implementação da solução -->

        <form  method = "post">
            Digite um número: <input type="number" name="numero" required>
         <input type="submit" value="Enviar">
         </form>

        <?php

        function antecessor($numero){
            return $numero - 1;
            }

        if (isset($_POST['numero'])) {
                $numero = (int) $_POST['numero'];
                echo "Você digitou: $numero <br>";
                echo "O antecessor de $numero é: " . antecessor($numero);
            }
        ?>

    </main>
</body>
</html>
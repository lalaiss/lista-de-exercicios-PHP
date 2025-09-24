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
        <h2>Questão 07: Fatorial </h2>
        <h3>Programa que calcule o fatorial de um número.</h3>
    </header>

    <main>
    <!-- implementação da solução -->
        <form>
        <label for="numero1">Digite um número:</label> <input type="number"  name="numero" required>
        <button type="submit">Enviar</button>
        </form>

        <?php
        if (isset($_GET['numero'])) {
            $num = $_GET['numero'];
            $fatorial = 1;

            for ($i = 1; $i <= $num; $i++) {
                $fatorial *= $i;
            }

            echo "O fatorial de $num ! é: " . $fatorial;
        }
        ?>

    </main>
</body>


</html>
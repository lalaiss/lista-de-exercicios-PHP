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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     
    <form method="post">
        <label for="numero1">Digite o número 1:</label> <input type="number"  name="numero1" required>
        <br><label for="numero1">Digite o número 2:</label> <input type="number"  name="numero2" required>
        <br><label for="numero1">Digite o número 3:</label> <input type="number"  name="numero3" required>
        <button type="submit">Enviar</button>
    </form>
    
    <?php
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];

    $resultado = max($num1,$num2,$num3);

    echo "O número com maior valor é :" . $resultado ;
    ?> 

    </main>
</body>


</html>
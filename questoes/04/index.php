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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <!-- implementação da solução -->

    <form method="post">
        <label for="area">Digite o tamanho da área em metros quadrados (m²):</label>
        <input type="number" step="0.01" name="area" id="area" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
     
     $area = $_POST ['area'];



    ?>
     
    </main>
</body>


</html>
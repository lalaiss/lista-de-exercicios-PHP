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
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>
    <!-- implementação da solução -->
     <?php
        $impares = [];
        for ($i = 1; $i <= 50; $i += 2) {
            $impares[] = $i;
        }
        echo "Números ímpares de 1 a 50: " . implode(", ", $impares);
        ?>
    </main>
</body>


</html>
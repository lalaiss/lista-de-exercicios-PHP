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
        <h2>Questão 02: Metros para centimetros</h2>
        <h3>Programa que converta metros para centímetros.</h3>
    </header>

    <main>
    <!-- implementação da solução -->

    <form  method = "post">
         Digite um número: <input type="number" name="metros" required>
         <input type="submit" value="Enviar">
    </form>
    
     <?php
     
        $metros= $_POST ['metros'];

        $resultado = $metros * 100;
 
        echo "O valor  $metros m² convertido em centímetros é :" . $resultado = $metros * 100 . "cm";
     ?>
    </main>

</body>
</html>
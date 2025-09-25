<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 09</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>
 
    <!-- implementação da solução -->
     
    <form>
    <label for="nome">Escreva o seu nome:</label> <input type="text"  name="nome" required>
    <label for="idade">Escreva o sua idade:</label> <input type="number"  name="idade" required>
    <button type="submit">Enviar</button>
    </form>
     
    <?php
     if (isset($_GET['idade'])) {
        $idade = $_GET['idade'];
        $nome = $_GET['nome'];

        $calculodias = $idade * 365;
        
        echo $nome . " você possui " . $calculodias . " dias de vida. ";
     }
    ?>
    </main>
</body>


</html>
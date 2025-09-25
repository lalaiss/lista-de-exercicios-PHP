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
        <h2>Questão 10: Calculando as Horas</h2>
        <h3>Programa para calcular o tempo em segundos e exibindo o resultado em horas, minutos e segundos</h3>
    </header>

    <main>
    
    <!-- implementação da solução -->

        <form>
            <label for="segundos">Digite o tempo de duração do evento (em segundos):</label>
            <input type="number" name="segundos" min="0" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if (isset($_GET['segundos'])) {
             $segundos = $_GET['segundos'];
             $horas = $segundos/3600;
             $minutos = $horas * 60;
          
              echo "<p>Duração: {$horas} hora(s), {$minutos} minuto(s) e {$segundos} segundo(s).</p>";
             

        }
        ?>
     
    </main>
</body>


</html>
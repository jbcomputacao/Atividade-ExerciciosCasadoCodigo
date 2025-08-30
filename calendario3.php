<html>
    <head>
        <title>Calendário</title>
    </head>
    <body>
        <h1>Calendário do Mês Atual</h1>

        <?php 
        date_default_timezone_set('America/Sao_Paulo');

        // Data atual
        $hoje = new DateTime();

        // Nome do mês e ano
        $mesAtual = $hoje->format('F Y'); // Ex: August 2025
        echo "<h2>$mesAtual</h2>";

        // Frase de bom dia com hora atual
        $hora = $hoje->format('H:i');
        echo "<h3>Bom dia! A hora atual é: $hora</h3>";

        // Função para desenhar a linha da semana
        function linha($semana, $diaAtual) {
            echo "<tr>";
            foreach ($semana as $i => $dia) { 
                if ($dia == 0) {
                    echo "<td></td>"; // célula vazia
                } else {
                    // destaca o dia atual em negrito
                    $conteudo = ($dia == $diaAtual) ? "<strong>$dia</strong>" : $dia;

                    // pinta domingo de vermelho (coluna 0)
                    if ($i == 0) {
                        echo "<td style='color:red;'>$conteudo</td>";
                    } else {
                        echo "<td>$conteudo</td>";
                    }
                }
            }
            echo "</tr>";
        }

        function calendario($ano, $mes, $diaAtual) {
            // Primeiro dia do mês
            $primeiroDia = mktime(0, 0, 0, $mes, 1, $ano);
            var_dump($primeiroDia);
            $numeroDias = date("t", $primeiroDia); // total de dias no mês
            $diaSemana = date("w", $primeiroDia); // dia da semana do 1º dia (0 = domingo)

            $semana = array();

            // Preenche espaços vazios antes do 1º dia
            for ($i = 0; $i < $diaSemana; $i++) {
                $semana[] = 0;
            }

            // Preenche os dias do mês
            for ($dia = 1; $dia <= $numeroDias; $dia++) {
                $semana[] = $dia;

                if (count($semana) == 7) {
                    linha($semana, $diaAtual);
                    $semana = array();
                }
            }

            // Última linha (se sobrar dias)
            if (count($semana) > 0) {
                while (count($semana) < 7) {
                    $semana[] = 0;
                }
                linha($semana, $diaAtual);
            }
        }
        ?>

        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th style="color:red;">Domingo</th>
                <th>Segunda</th>
                <th>Terça</th>
                <th>Quarta</th>
                <th>Quinta</th>
                <th>Sexta</th>
                <th>Sábado</th>
            </tr>
            <?php
                calendario($hoje->format("Y"), $hoje->format("n"), $hoje->format("j"));
            ?>
        </table>
        
    </body>
</html>

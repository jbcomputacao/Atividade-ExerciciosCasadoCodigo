<html>
    <head>
        <title>Calendário</title>
    </head>
    <body>
        <h1>Calendário do Mês</h1>
    </body>
    <!-- frase de bom dia com hora -->
     <?php 
     
     
  $date = new \DateTime();
    // Exibe a hora formatada
   
    $format =  date_default_timezone_set('America/Sao_Paulo');

    //date e hora atual
    $date = new \DateTime();
    $dateFormatada = $date->format('G:ia');

    echo "<h2>Bom dia! A hora atual é: $dateFormatada</h2>";
    
  
function linha($semana){
   echo "<tr>";
    foreach ($semana as $dia) { 
        echo "<td>$dia</td>";
    }
    // Preenche os dias restantes da semana com células vazias
    for ($i = count($semana); $i < 7; $i++) {
        echo "<td></td>";
    }
    echo "</tr>";
}

function calendario() {
    $dia = 1;
    $semana = array();
    while ($dia <= 31) {
        array_push($semana, $dia);

        if (count($semana) == 7) {  
          
                linha($semana);
                $semana = array();
            }
               $dia++;
        }

        linha($semana);
    }
?>


<table border="1">
    <tr>
        <th>Domingo</th>
        <th>Segunda</th>
        <th>Terça</th>
        <th>Quarta</th>
        <th>Quinta</th>
        <th>Sexta</th>
        <th>Sabado</th>
    </tr>
<?php
    calendario();
    ?>

</table>

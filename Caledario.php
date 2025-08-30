<html>  
<head>
    <title>Calendario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  
    <table border = "1">
        <tr>
            <th colspan="7">Calendario</th>
        </tr>
        <tr>
            <th>Domingo</th>
            <th>Segunda</th>
            <th>Terça</th>
            <th>Quarta</th>
            <th>Quinta</th>
            <th>Sexta</th>
            <th>Sábado</th>
        </tr>
        <?php
        $dias = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
        $primerDia = date('w', strtotime(date('Y') . '-' . date('n') . '-01'));
        
        echo '<tr>';
        for ($i = 0; $i < $primerDia; $i++) {
            echo '<td></td>';
        }
        
        for ($dia = 1; $dia <= $dias; $dia++) {
            echo '<td>' . $dia . '</td>';
            if (($dia + $primerDia) % 7 == 0) {
                echo '</tr><tr>';
            }
        }
        
        while (($dias + $primerDia) % 7 != 0) {
            echo '<td></td>';
            $dias++;
        }
        
        echo '</tr>';
        ?></table>
</body>
</html>


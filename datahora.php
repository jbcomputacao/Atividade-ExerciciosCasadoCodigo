<?php
date_default_timezone_set('America/Sao_Paulo');
echo "Data e hora atuais: " . date('Y-m-d H:i:s');
echo "hoje é dia " . date('d/m/y');


// Usando a classe DateTime
echo "<br>Usando a classe DateTime<br>";
$date = new \DateTime();
echo date_format($date, 'Y-m-d H:i:s');

//output: 2012-03-24 17:45:12   
echo date_format($date, 'G:ia');
echo "<br>Usando a classe DateTime com timezone<br>";



// $date = new \DateTime('now', new \DateTimeZone('America/Sao_Paulo'));
// echo date_format($date, 'Y-m-d H:i:s'); 
// echo "<br>Usando a classe DateTime com timezone e formatando<br>";
// $date = new \DateTime('now', new \DateTimeZone('America/Sao_Paulo'));
// echo date_format($date, 'd/m/Y H:i:s'); 
// echo "<br>Usando a classe DateTime com timezone e formatando<br>";
// $date = new \DateTime('now', new \DateTimeZone('America/Sao_Paulo'));
// echo date_format($date, 'd/m/Y H:i:s');
// echo "<br>Usando a classe DateTime com timezone e formatando<br>";
// $date = new \DateTime('now', new \DateTimeZone('America/Sao_Paulo'));
// echo date_format($date, 'd/m/Y H:i:s');
?>


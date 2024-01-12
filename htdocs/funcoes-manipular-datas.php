<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
 <h1>Funções para manipular datas</h1>
 <?php 
    /*
    //recuperar a data atual do sistema operacional

    echo date('d/m/Y H:i'); // existem tokes que deve ser passados para recuperar o formato da data, dia, mes, hora etc // no exemplo recupera dia/mes/ano/hora/minutos

    echo '<br/>';

    echo date_default_timezone_get (); // pega o fuso horario do SO

    echo date_default_timezone_set('America/Sao_Paulo'); // define o fuso horario do SO

    echo '<br/>';

    echo date('d/m/Y H:i');  // fuso atualizado
    */

    $data_inicial = '2000-09-06';
    $data_final = '2023-11-09';

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial . "-" . $time_inicial;
    echo "<br/>";
    echo $data_final . "-" . $time_final;

    $diferenca_time = $time_final - $time_inicial;

    echo "<br/>";

    echo "A diferença de segundos entre a data inicial é final é de: " . $diferenca_time;
    

    $segundos_existem_dia = 24*60*60;

    echo "<br/>";

    echo "Um dia possui " .  $segundos_existem_dia . " segundos";

    $diferenca_dias_entre_datas = $diferenca_time/$segundos_existem_dia;

    
    echo "<br/>";

    echo "A dirença de dias entre as datas é: " . $diferenca_dias_entre_datas . " dias"; 





 ?>

</body>
</html>
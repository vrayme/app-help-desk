<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>False, null e empty</h1>
  <?php 
  
    // false (true/false) - variável do tipo boolean
    //null e empty - valores especiais
  

    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;


    //teste com os valores null
    // quando usamos a função is_null = null = null, '' = '', false = false





    if (is_null($funcionario1)) {  // is_null (): função para testar se o valor contido na variável é null
        echo 'Sim, a variável é null';

    } else {
        echo 'Não, a variável não é null';
    }

    echo  '<br/>';

    
    if (is_null($funcionario2)) {  // is_null (): função para testar se o valor contido na variável é null
        echo 'Sim, a variável é null';

    } else {
        echo 'Não, a variável não é null';
    }
    echo  '<br/>';
    if (is_null($funcionario3)) {  // is_null (): função para testar se o valor contido na variável é null
        echo 'Sim, a variável é null';

    } else {
        echo 'Não, a variável não é null';
    }


    // testes de valores vazios

    // quando usamos a função empty, null = vazio, false = vazio


    echo '<hr/>';

    
    if (empty($funcionario1)) {  // empty (); função para testar se o valor contido na variável é vazio
        echo 'Sim, a variável está vazia';

    } else {
        echo 'Não, a variável não não está vazia';
    }

    echo  '<br/>';


    if (empty($funcionario2)) {  // empty (); função para testar se o valor contido na variável é vazio
        echo 'Sim, a variável está vazia';

    } else {
        echo 'Não, a variável não não está vazia';
    }
    echo  '<br/>';
    if (empty($funcionario3)) {  // empty (); função para testar se o valor contido na variável é vazio
        echo 'Sim, a variável está vazia';

    } else {
        echo 'Não, a variável não não está vazia';
    }


  
  
  ?>
    
</body>
</html>
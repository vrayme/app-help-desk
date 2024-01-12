<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <h1>Variáveis constantes</h1>


    <?php 
    
    // criando variáveis constantes, define ('nome da varivael', 'conteudo'); // boa pratica, o nome da variavel em MAIUSCULO

    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_bd_dev');
    define('BD_SENHA', 'senha_bd_dev');


    // recuperando os valores das constantes


    echo BD_URL . '<br/>';
    echo BD_USUARIO . '<br/>';
    echo BD_SENHA . '<br/>';


    // tentando alterar o valor

    // define('BD_SENHA', 'rayme_dev');


    echo BD_SENHA . '<br/>'; // não é possivel

    
    ?>
  


</body>
</html>
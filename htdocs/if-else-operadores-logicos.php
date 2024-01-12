<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <h1>Operadores logicos e if e else</h1>

    <?php 

        // Tivemos exercicios com os operadores de logicos, &&, ||, XOR, ! () 

        // praticando mais um pouco

        // criando as variaveis


        $usuario_possui_cartao_loja = true;
        $valor_compra = 101;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if ($usuario_possui_cartao_loja == true && $valor_compra >= 450) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        } else if ($usuario_possui_cartao_loja == true && $valor_compra >= 300) {
            $valor_frete = 10;
            $recebeu_desconto_frete = true;
        }
        else if ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
            $valor_frete = 25;
            $recebeu_desconto_frete = true;
        }
    
    
        // encadeando else e if 
    ?>

    <h1>Detalhes do pedido</h1>

    <p> Possui cartão da loja? =

    <?php 
    
    if ($usuario_possui_cartao_loja == true) {
       echo "SIM";
    } else {
        echo "NÂO";
    }
    
    ?>
    </p>

    <P> Valor da compra:
        <?= $valor_compra ?>
    </P>

    <p> Recebeu desconto no frete? =

    <?php 
    
    if ($recebeu_desconto_frete == true) {
       echo "SIM";
    } else {
        echo "NÂO";
    }
    
    ?>
    </p>

    <P> Valor do frete:
        <?= $valor_frete?>
    </P>



 

</body>
</html>
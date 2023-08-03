<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>

    <style>
        .comprar{color:red}
        .urgente{
            color:red; 
            background-color:yellow; 
            font-weight: bold;
         }
        .normal{color: green;}

    </style>
</head>
<body>
    <h1>(VERSÃO 2)Estrutura Condicionais</h1>
    <p>Refaturação</p>

    <h2>Simples</h2>

    
    <?php
    $numero = 5;
    if($numero > 1){       
    }

    //Sintaxe sem chave
    if($numero > 1) echo "<p>$numero é maior que 1</p>"; // esse não mudamos para fora pois está em uma unica linha
    ?>

    <!-- O <p> não precisa colocar no PHP então coloque o <p> que estava no echo  coloque fora do PHP no final ?>-->
    <p><?$numero?> é maior que 1</p>

    <h2>Composta</h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 15; // o que temos
    $qtdCritica = 15; // mínimo necessário
    ?>
    
    <?php
    if($qtdEmEstoque < $qtdCritica){
    ?>    
    <p class="comprar"> É necessário comprar!</p>

    <?php
        if($qtdEmEstoque == 0 ){
    ?>     
    <p class="urgente">URGENTE!</p>
    <?php    
        }
    
    } else {
    ?>    
    <p class="normal"> Estoque normal</p>
    <?php
    }  
    ?>  
    

    <h3><?=$produto?></h3>
    <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>



    <h2>Encadeada</h2>

    <?php
    // opções para exemplo
    // 1                    -> lanche
    // 2                    -> pizza
    // 3                    -> paçoca
    //qualquer outra opção  ->inválida 

    $opcaoEscolhida = 3; // comece com qualquer valor
    ?>
    
    <?php
    if($opcaoEscolhida == 1){
    ?>    
    <p>Ok, vamos fazer o lanche</p>
    <?php
    } elseif ($opcaoEscolhida == 2){
    ?>    
    <p>Beleza, pizza no forno...</p>
    <?php
    }elseif ($opcaoEscolhida == 3){
    ?>    
    <p>Professor ficou feliz!</p>
    <?php
    } else{
    ?>    
    <p>Não entendi... vou chamar a Valeska</p>
    <?php
    }
    ?>

    <hr>
     
    <!-- A opção de cima do tem  $opcaoEscolhida  na linha 3 pode fazer dessa forma, pois o código fica mais leve -->
    <?php
    if($opcaoEscolhida == 2){
        $mensagem = "Ok, vamos fazer o lanche";  

    } elseif ($opcaoEscolhida == 2){
        $mensagem = "Beleza, pizza no forno...";  
    
    }elseif ($opcaoEscolhida == 3){
        $mensagem = "Professor ficou feliz!";  
    
    } else{
        $mensagem = "Não entendi... vou chamar a Valeska!"; 
    }
    ?> 
      <p><?=$mensagem?></p>

      <h2>switch/case</h2>    
    <!-- // versão usando switch/case em logica é caso -->

    <?php 
    switch($opcaoEscolhida){
        case 1: $mensagem = "lanche..."; break;
        case 2: $mensagem = "pizza..."; break;
        case 3: $mensagem = "paçoca..."; break;
        default: $mensagem = "Chama Valeska..."; break;
        

    }
    ?> 
    <p><?=$mensagem?></p>

    

    <hr>
    <?php
    // Exemplo: == e ===

    // Em resulmo, ao comparar com dois sinais de igual a comparação será feita APENAS em relação aos VALORES.

    // E ao comparar com três sinais de igual, a comparação será feita em relação ao VALOR E TIPO DE DADOS. portanto, é mais retritivo. Tipo quer dizer: Float(Real) com Float(Real) por exemplo.
    
    $a = 10;
    $b = 10;
    $resultado = $a == $b; // LÓGICO é camado de BOOLEAN
    var_dump( $resultado );
    echo"<br>";
    var_dump( $a );
    echo"<br>";
    var_dump( $b );
    ?>
    
    
</body>
</html>
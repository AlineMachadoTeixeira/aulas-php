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
    <h1>Estrutura Condicionais</h1>

    <h2>Simples</h2>

    <?php
    $numero = 5;
    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";
    }

    //Sintaxe sem chave
    if($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 20; // o que temos
    $qtdCritica = 15; // mínimo necessário

    echo"<h3>$produto</h3>";
    echo"<h4>Quantidade em estoque: $qtdEmEstoque</h4>";
    if($qtdEmEstoque < $qtdCritica){
        echo"<p class='comprar'> É necessário comprar!</p>";

        //Comdicional ANINHADA (Só chega nesse ponto if for verdadeira no caso zero)
        if($qtdEmEstoque == 0 ){
            echo"<p class='urgente'>URGENTE!</p>";
        }

    } else {
        echo"<p class='normal'> Estoque normal</p>";
    }
    
    ?>

    <h2>Encadeada</h2>

    <?php
    // opções para exemplo
    // 1                    -> lanche
    // 2                    -> pizza
    // 3                    -> paçoca
    //qualquer outra opção  ->inválida 

    $opcaoEscolhida = 1; // comece com qualquer valor

    if($opcaoEscolhida == 1){
        echo"<p>Ok, vamos fazer o lanche</p>";
    } elseif ($opcaoEscolhida == 2){
        echo"<p>Beleza, pizza no forno...</p>";
    }elseif ($opcaoEscolhida == 3){
        echo"<p>Professor ficou feliz!</p>";
    } else{
        echo"<p>Não entendi... vou chamar a Valeska</p>";
    }



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
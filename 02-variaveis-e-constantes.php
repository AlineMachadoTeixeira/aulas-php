<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constante</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>

    <?php
    //Variáveis 

    //caractere (string )
    $curso = "Téc. em Informatica para Internet";

    //inteiro (integer)
    $ano = 2023;

    //real (float)
    $preco = 2500.25; 

    echo "<h2>Saída de dados usando echo na sintaxe COMPLETA </h2>";

    // sem estrutura/tag 
    echo $curso;

    // interpolação (somente com aspa duplas)
    echo "<p>$curso</p>"; 

    //vira um string com aspa simples está ERRADO
    echo '<p>$curso</p>'; 

    // concatenação
    echo "<p>" .$curso. "</p>";

    echo "<p>Ano letivo: $ano</p>";
    echo "<p><b>Preço</b>: $preco</p>" 


    ?>

    <h2>Saída de dados usando sintaxe SIMPLIFICADA</h2>
    <p> <?php echo $curso ?> </p>
    
    <p> <?= $curso ?> </p>

    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?></p> 

    <?php
      //Constantes

      // 1º forma: usando a função define()
      define("MEU_NOME", "Aline Teixeira"   );


      //2º forma: usando a palavra-chave const
      const UNIDADE = "Penha";

      //Saída de dados constantes
      echo MEU_NOME;
      echo "<p><b>".MEU_NOME."</b></p>";    
    ?>

    <!-- Saída simplificada -->
    <p> Me chamo <b> <?= MEU_NOME?> </b> e estou no senac <?=UNIDADE?></p>


</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou sub-rotina</h2>

<?php
function dadoAutor(){
?>
<div>
    <p>Tiago B. dos Santos</p>
    <p><a href="mailto">email@aa.com</a></p>
</div>
<?php
}
?>

<section>
    <h3>Chamada da Sub-rotina/procedimento</h3>
    <?=dadoAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadoAutor()?>
    </article>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso(){
        //return "Técnico em Informatica para Internet";
        return "<b>Back-end</b>";
    }
    ?>
    <p>Estamos no curso de <?=dadosCurso()?> é ministrado no Senac Penha.</p>

    <h2>Função com parâmetros (ou argumentos)</h2>
    <!-- Mesmo com o $ na soma($valor1, $valor2, $valor3) não é uma variável é um parâmetros -->
    <?php
    function soma($valor1, $valor2, $valor3){

        //Variável de ESCOPO LOCAL
        $total = $valor1 + $valor2 + $valor3;
        return $total;
    }
    ?>
    <!-- Chamando e exibindo diretamente o retorno -->
    <p>Resultado 1: <?=soma(10, 20, 5)?></p>
    <p>Resultado 2: <?=soma(23, 84, 1000.75)?></p>

    <?php
    //Chamando e guardando retorno
    $resultado3 = soma (500, 480, 700);    
    ?>
    <p>Resultado 3: <?=$resultado3?></p>

    <?php
    if($resultado3 > 100){ 
    ?> 

    <p>Vicícius foi demitido!</p>

    <?php
    }    
    ?>

    <!-- Usando uma função como parte de uma condição -->
    <?php
    if( soma(2, 3, 10) >= 10 ){
    ?>

    <p>Kaue Reprovado!</p>
    
    <?php
    }
    ?>
   

   <h3>Função com parâmetros opcionais </h3>
   <?php
   function saudacao($mensagem, $pessoa){
    return "Olá, $mensagem $pessoa! ";
   }   
   ?>

   <p> <?=saudacao("bom dia" , "Melissa")?> </p>
   <p> <?=saudacao("boa noite" , "Tanaka")?> </p>

   <hr>

   <!-- $pessoa é um parametro opcional com um valor padrão -->
   <?php
   function saudacaoo($mensagem, $pessoa = "Fulando(a)"){
    return "Olá, $mensagem $pessoa! ";
   }   
   ?>

   <p> <?=saudacaoo("bom dia" , "Melissa")?> </p>
   <p> <?=saudacaoo("boa noite" )?> </p>
    

   <h2>Indução de tipos de dados</h2>
   <?php
    /* Tipos de dados mais comuns
    string --> caracteres em geral
    int --> número inteiro
    float --> números com casas decimais 
    array --> vetor  */

    
    // (int $valor) colocou o int para informar que o  $valor é um número inteiro e colocou o :string para dizer que a informação que vai sair é um texto. 

    //Indução de tipos deve ser feita nos parâmetros e no retorno da função. 

    // Isso auxiliará na entrada/saída correta dos dados manipulados pela função, além de melhorar as mensagens de erro quando ocorrem problemas.


    function verificaNegativo(int $valor):string{
        if($valor < 0){
            return "é negativo";
        } else{
            return "não é negativo";
        }
    }   
   ?>
   <p> Numero 10: <?=verificaNegativo(10)?> </p>
   <p> Numero -10: <?=verificaNegativo(-10)?> </p>
   

   


    
</section>
</body>
</html>
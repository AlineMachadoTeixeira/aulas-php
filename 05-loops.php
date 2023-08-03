<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Estruturas de controle de Repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>
    
    <!-- Antes era assim depois ficou igual a linha 21 -->
    <!-- // $i= 1; 
    //while( $i <= 5 ){
        echo "<p>$i</p>";
        //$i++; // antes era $i = $i + 1; agora usamos o ++ 
    }   -->     
    
    <?php
    $i= 1;
    while ( $i <= 5 ){
    ?>    
    <p> <?=$i?></p> <!-- antes era o echo igual a cima -->
    <?php
        $i++; 
    }     
    ?>
    
    <hr> 
    <h2> DO/WHILE (repita/até)</h2>
  <!--      
    $j = 1;
    do{
        echo" <div> ";
        echo" <h3>Título... </h3>";
        echo"<p> Lorem ipsun xxxxxxxxxxxxxxx lorem ipsun</p>";
        echo"<div>";

        $j++;

    } while ( $j <= 10 );,

    -->   

<?php
$j = 1;
do{
?>        
         <div> <!-- tiramos o echo era igual o de cima -->
          <h3>Título... </h3>
          <p> Lorem ipsun  lorem ipsun</p>
        <div>
<?php
    $j++;
} while ( $j <= 10 );
?>


    <hr>
    <h2>FOR (para)</h2>
    <?php
    // Variável de controle; condição; atualização
    for( $i = 1;  $i <=3;  $i++){
    ?>
    <!-- code é para marcar código/linguagem -->
    <p> <code>i</code> vale: <b><?=$i?></b> </p>  
    <?php       
    }
    ?>


<hr>
               <h3>Exercício</h3>
<!-- 
    Exercício
1) Crie um array com os nomes dos meses do anos 
2) Usando um loop (qualquer um); acesse e mostre os nomes dos meses dentro de uma lista ordenada    
 -->

 <?php
       // isso é um arrays
       $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];        
 ?>

<ol> 
   <?php
       // Variável de controle; condição; atualização
       for( $indice = 0;  $indice <= 11;  $indice++){
   ?> 

   <li><?=$meses[$indice]?></li>
   <br>

   <?php       
     }
   ?>
</ol>


<hr>
<!-- Novo exemplo quando não sabemos a quantidade do meses era até 12 -->

<?php
   // isso é um arrays
   $alunos = ["Melissa", "Tanaka", "Zimbo", " Eduador", "Kaue"];    
?>

<?php   
       // count siginifica contar 
       // Função count() ou sizeof() literalmente conta a quantidade de elementos dentro de um array, retornando um numero inteiro
       for( $indice = 0;  $indice < count($alunos);  $indice++){
   ?> 

   <p><?=$alunos[$indice]?></p>
   <br>

   <?php       
     }
   ?>
   
   <hr>

       <!--  ou podemos fazer assim que é melhor para o desenvolvimento do site -->

      <!-- Guardamos em "cache" (memória) a quantidade de elementos, evitando assim a conatagem de cada iteração do loop e melhorando a performance-->
   <?php   
    $quantidade = count($alunos);   
       for( $indice = 0;  $indice < $quantidade;  $indice++){
   ?> 

   <p><?=$alunos[$indice]?></p>
   <br>

   <?php       
     }
   ?>


   <hr>
   <h2>FOREACH (para cada)</h2>
   <p>Útil (e mais fácil) para lidar com <code>ARRAYS</code></p>
   
   <ol>
      <?php
         foreach($meses as $mes){
      ?>
      <li><?=$mes?></li>
      <?php    
         }
    
    ?>
   </ol>


   <hr>
   <ol>
    <h3>Manipulação arrays associativos</h3>
    <?php
    //Arrays Associativo
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeira" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe",
    ];
     // $clubes lá de cima tipo o arrays  ------ as $clube nome tipo Corinthians  -------- => $apelido é o associativo tipo Timão 
    foreach ($clubes as $clube => $apelido){
    ?>

    <p>O <?=$clube?> é conhecido como <?=$apelido?> </p>

    <?php  
    }    
    ?>
   </ol>


   <hr>
   <h2>Loop com Matriz</h2>

   <?php
   $planoDeEstudo = [
       ["HTML", "CSS", "JS" ],
       [ "React", "React Native"]
   ];

   //Usando for aninhado 
   for ($linha = 0;  $linha < count($planoDeEstudo); $linha++){
     for($coluna = 0;  $coluna < count($planoDeEstudo[$linha]); $coluna++){
   ?>

    <p><b><?=$planoDeEstudo[$linha][$coluna]?></b></p>

   <?php     
     } //for coluna fechamento
   } //linha fechamento
   ?>

   <hr>

   <!-- Mesmo jeito do de cima, porém simplificado -->

   <?php
     // Usando foreach aninhado
     foreach($planoDeEstudo as $linha){
       foreach($linha as $coluna){
   ?>
   
   <p><i><?=$coluna?></i></p>

   <?php     
       }//for coluna fechamento
     } //linha fechamento  
   ?>


<hr>
<h3>Loop com matriz associativa</h3>
<?php
 $clientes = [
    [ 
        "nome" => "Chaves",
        "idade" => 8
    ],

    [
        "nome" => "Chapolin",
        "idade" => 25
    ],

    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
 ];

 foreach ($clientes as $cliente){
?>

<p>Nome: <?=$cliente["nome"]?></p>
<p>Idade: <?=$cliente["idade"]?></p>

<?php    
 }
?>
   

   <!-- Lembrete sobre sintaxe de estrutura de controle (condicionais e loops) 

   if(){
   } else{    
   }

   no lugar as chaves{} podemos usar o dois pontos : e no final endif; com ;  
   if():      
   Else:
   endif;

   se for for
   for(){        
   }

   for():
   endfor; 


-->

</body>                                                                                               
</html>
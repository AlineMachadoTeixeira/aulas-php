<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo Post</title>
</head>
<body>
    <h1>Exemplo usando Post</h1>
    <hr>
    <p>Receber e processar dados via <b>Post</b></p>

    <?php
    /* Verificar se os campos nome e e-mail estão vazios 
    
    barrinha ||    é operador    OU  OR 
             &&    é operador    E   AND 
             !     é operador    Não  NOT */
    if( empty ($_POST ["nome"]) || empty($_POST ["email"]) ){
    ?>    
        <p>Você deve preencher nome e e-mail</p>";
        <p> <a> href \"10-formulario.html\"</a></p>";

   <?php 
   } else{
    
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $mensagem = $_POST["mensagem"];
      $idade = $_POST["idade"];

      /* Exercício linha 39 pelo professor
      * SOLUÇÃO USANDO OPERADOR DE   COALESCÊNCIA: ??

      $interesses = $_POST["interesses"] ?? []; 
       */


      /*  Exercício se houver interesses (ou seja, foi selecionado pelo menos 1), guarde na variavel o $_POST["interesses"]. Caso contrário, guarde na varuiavel um array vazio  ISSET   depois em baixo que fazer isso faz igual a linha 56 para o exercício funcionar */  
      if (isset ($_POST["interesses"]) ){    
      $interesses = $_POST["interesses"]; 
      }else{
        $interesses = [];
      }
      ?>  

    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?> </li>
        <li>E-mail: <?=$email?> </li>
        <li>Idade: <?=$idade?> </li>  

        <?php 
        if ( !empty ($interesses) ){ ?>
        <li>Interesses: <?= implode(", " , $interesses)?></li>  <!-- Linha 56 versão 1:
            Transformando o $interesses em string  --> 
        
        <!-- Versão 2: 
            acessando cada interesse existente no array usando loop -->
        <li>Interesses: 
            <ul>
                <?php foreach ( $interesses as  $interesse) {?>
                <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>  


        <?php }?>        

        <!-- Falar para o PHP que essa mensagem só vai aparecer se não tiver vazia -->
        <!-- Se a variavel mensagem NÃO ESTIVER VAZIA, mostre o li com a mensagem  usameos o !empty para não mostrar a mensagemm, pois o ! é o operador não-->
        <?php if ( !empty ($mensagem)){ ?>
        <li>Mensagem:<?=$mensagem?> </li>
        <?php }?>
                
    </ul>
   <?php
   }
   ?>  
    
</body>
</html>
 
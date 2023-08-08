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

      /*  Exercício se houver interesses (ou seja, foi selecionado pelo menos 1), guarde na variavel o $_POST["interesses"]. Caso contrário, guarde na varuiavel um array vazio  ISSET  */
      $interesses = $_POST["interesses"]
   ?>  


    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?> </li>
        <li>E-mail: <?=$email?> </li>
        <li>Idade: <?=$idade?> </li>        
        <li>Interesses: <?= implode(", " , $interesses)?> </li>

        <!-- Falar para o PHP que essa mensagem só vai aparecer se não tiver vazia -->
        <!-- Se a variavel mensagem NÃO ESTIVER VAZIA, mostre o li com a mensagem  usameos o !empty para não mostrar a mensagemm, pois o ! é o oerador não-->
        <?php if ( !empty ($mensagem)){ ?>
        <li>Mensagem:<?=$mensagem?> </li>
        <?php }?>
                
    </ul>
   <?php
   }
   ?>
  
    
</body>
</html>
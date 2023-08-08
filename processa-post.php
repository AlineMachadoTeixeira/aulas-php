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
    ?>  


    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?> </li>
        <li>E-mail: <?=$email?> </li>
        <li>Mensagem:<?=$mensagem?> </li>        
    </ul>
   <?php
   }
   ?>
  
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo Get</title>
</head>
<body>
    <h1>Exemplo usando GET</h1>
    <hr>
    <p>Receber e processar dados via <b>GET</b></p>
    <?php
    //Capturando os dados transmitidos
    //$nome = $_GET["nome"];
    //$email = $_GET["email"];
    //$mensagem = $_GET["mensagem"];
    // o exemplo de cima é o melhor
    extract($_GET);
    ?>

    <h2>Dados:</h2>
    <ul>
        <Li>Nome: <?=$nome?></Li>
        <Li>E-mail: <?=$email?></Li></Li>
        <Li>Mensagem: <?=$mensagem?></Li></Li>
    </ul>
    
</body>
</html>
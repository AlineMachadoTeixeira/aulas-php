<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento Exercício 7</title>
    <link rel="stylesheet" href="../07-formulario-cadastro/estilo.css">
</head>

<body>

<!-- Faltou só um título/h1 aqui -->

    <?php

    if (empty($_POST["produto"]) || empty($_POST["preco"])) {
    ?>
        <p>Você deve preencher o campo produto e preço</p>
        <p> <a href= "formulario-produto.php"> Voltar </a></p>

    <?php
    } else {

        $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);

        $fornecedor = filter_input(INPUT_POST, "fornecedores", FILTER_SANITIZE_SPECIAL_CHARS);

        /* Aqui no $preco, o ideal é sanitizar em vez de validar.
        Você deverá usar dois filtros: um para sanitização de float e outro para permitir dígitos/casas
        decimais. */
        $preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);

        $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);

        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>
        <h2>Dados de Cadastro:</h2>
        <ul>
            <li>Produto: <?= $produto ?></li>
            <li>Fornecedores: <?= $fornecedor ?></li>
            <li>Disponível: <?= $disponibilidade ?></li>
            <li>Preço:<?= number_format($preco, 2, ',', '.') ?> </li>

    <?php
    }
    ?>

        <?php
        if (!empty ($descricao)) { ?>
            <li>Descrição:<?= $descricao?> </li>
        <?php
        }
        ?>
        </ul>






</body>

</html>


<?php
include "recursos.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral - <?=ESCOLA?></title>
    <style>
        p { font-family: "Verdana"; }

        .destaque { text-transform: uppercase; }
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <?php
    // Geração de texto (string)
    echo "hoje tem Corinthians!";
    echo "<p class='destaque'>hoje tem Corinthians! class em todo texto</p> ";
    echo "<p>hoje tem <span class='destaque'>Corinthians!</span> class só no corinthians</p> ";

    // Geração de texto estruturado (com tags, atributos)
    echo "<h2>Gerando HTML através do PHP</h2>";

    //CSS inline
    echo"<p style= \"color:red\">O Vinicius está reprovado.(1º opção)</p>";
    echo"<p style='color:orange'>O Vinicius está reprovado.(2º opção)</p>";
    echo'<p style="color:pink">O Vinicius está reprovado.(3º opção)</p>';
    ?>

    <script>
        let destaque = document.querySelector("p.destaque");
        console.log(destaque)
    </script>

</body>
</html>
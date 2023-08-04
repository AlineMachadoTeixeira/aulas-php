<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas </title>
</head>
<body>

<h1>Exemplo de funções nativas</h1>
<hr>

<h2>Strings</h2>
<h3>trim()</h3>
<?php
/* Função que remove espaço antes e depois de strings/caractere. */
$nome = "     Vinícius me deve 80 paçocas      ";
$nomeSemEspaco = trim($nome);
?>

<pre> <?=var_dump($nome)?></pre>
<pre> <?=var_dump($nomeSemEspaco)?> </pre>


<h3>str_reaplace()</h3>
<?php
/* Função que permite substituição de strings/caracteres. Exemplos tirar palavras inadequada*/
$fraseFeia = "Fulando é um bobão e xarope";
$fraseBunitinha = str_replace(
    ["xarope", "bobão"], 
    "*****",
    $fraseFeia
);
?>
<p><?=$fraseFeia?></p>
<p><?=$fraseBunitinha?></p>



<h3>explode()</h3>
<?php
/* Função que transforma uma string em um array */
$linguagens = "HTML - CSS - JS - PHP";
$arrayLinquagens = explode(" - ", $linguagens)
?>
<!-- com  pre visualização mais detalhada -->
<pre><?=var_dump($linguagens)?></pre>
<pre><?=var_dump($arrayLinquagens)?></pre>

<!-- sem pre -->
<p><?=var_dump($linguagens)?>/p>
<p><?=var_dump($arrayLinquagens)?></p>


<hr>
<h2>Numéricas</h2>
<h3>min, max</h3>
<?php
/* Descobrir qual o maior e o menor valor */
$valores = [10, 5, 50, 1000, 275];
$valorQualquer = 1259.45;
?>
<p>Menor valor: <?=min($valores)?></p>
<p>Maior valor: <?=max($valores)?></p>
<!-- round é para arredondamento era 1259.45 ficou 1259  -->
<p>Menor valor: <?=round($valorQualquer)?></p>


<h2>Arrays</h2>


<h2>Filtro</h2>


<h2>Segurança</h2>
    
</body>
</html>
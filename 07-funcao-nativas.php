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


<hr>
<h2>Arrays</h2>
<h3>implode()</h3>
<?php
/* Função que transforma um array em um string   */
$bandas = ["Rush", "Slayer", "Dio"];
//criar um caractere que quer ser usado para separar as bandas
$textoBandas = implode(" - ", $bandas );
?>
<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($textoBandas)?></pre>


<h3>extract()</h3>
<?php
/* Função que extrai chaves associativas para variáveis.  */
$aluno = [
    "id" => 1,
    "nome" => "Chaves",
    "idade" => 25,
];
extract($aluno)
?>
<!-- 
    <ul>
    <li>ID: <aluno['id']?></li>
    <li>Nome:<$aluno['nome']?> </li>
    <li>Idade:<$aluno['idade']?> </li>
</ul>

ERA ASSIM usando o extract ficou como a baixo

 -->
<ul>
    <li>ID: <?=$id?></li>
    <li>Nome:<?=$nome?> </li>
    <li>Idade:<?=$idade?> </li>
</ul>

<h3>array_sum()</h3>
<?php
/* Função para somar os valores de um array */
$total = array_sum($valores); //esse valores saiu da linha 60
?>
<p>Soma dos valores: <?=$total?></p>



<h3>array_unique()</h3>
<?php
/* Função que retorna um novo array com dados únicos no deixa repetir*/
$produtos = ["TV", "Notebook", "TV", "Geladeira", "Monitor", "Notebook", "Teclado", "Mouse"
];

$produtosUnicos = array_unique($produtos);
?>

<pre><?=var_dump($produtos)?></pre>
<pre><?=var_dump($produtosUnicos)?></pre>




<h2>Filtro</h2>


<h2>Segurança</h2>
    
</body>
</html>
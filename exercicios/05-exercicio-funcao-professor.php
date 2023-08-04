<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 </title>
</head>

<style>
    .aprovado {color: blue;}
    .reprovado { color: red;}
</style>
<body>

<?php
function calcularMedia( $n1, $n2 ){
    $mediaaaa = ($n1 + $n2 ) / 2;
    return $mediaaaa;
}

function verificarSituacao ($valorMedia ){
    if($valorMedia >= 7 ){
        return "aprovado";
    }else {
        return "reprovado";
    }

}


$nota1 = 10;
$nota2 = 7;
$media = calcularMedia ($nota1 , $nota2);
$situacao = verificarSituacao ($media);

if($media >= 7){
    $situacao = "aprovado";
} else {
    $situacao = "reprovado";
}
?>

<p><?=$media?></p>
<!-- Essa situação que está na class chamada situação está no style  só dar certo se o nome que colocamos no style for o mesmo que na variavel $situacao -->
<p class="<?=$situacao?>"><?=$situacao?></p>

    
</body>
</html>


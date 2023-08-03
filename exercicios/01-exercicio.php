<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 </title>

    <style>

       <?php $cor = "pink"; ?>
        body { background-color: <?=$cor?>; }
       
        h1 {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif  ; text-align: center;}
        p { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif  ;  text-align: center;}

        .cor { color:red }

        li { color: purple}        
        
    </style>
</head>
<body>

<h1>Exercício 01</h1>
<hr>
<?php
//Variáveis 

    //caractere (string )
    $nome = "Aline Teixeira"; 

    //caractere (string )
    $data = "18/04/2023";

    //caractere (string )
    $curso = "Téc. em Informatica para Internet";

    //real (float)
    $carga = 1000; 

    //real (float)
    $falta = 4; 

     //real (float)
     $limite = $carga / $falta;   

?>

<p> Me chamo <span class="cor"><?=$nome?></span>  e estou no curso <span class="cor"><?=$curso?></span> a minha carga horaria é <span class="cor"><?=$carga?> horas </span>  é meu limite de falta é <span class="cor"><?=$limite?> horas </span></p>




<h2> Exercício 01 versão professor</h2>

<?php

//Para DATA Atual Variavel faz assim:
$dataAtual= date("d/m/Y"); /* Y maiusculo para colocar 4 digito no anos é uma função para data brasileira d/m/Y  vai fazer aparecer a data atual*/

//Definir fuso hórario (timezone)  
date_default_timezone_set("America/Sao_Paulo");  //Mostrar o horario de onde você quer 

//Variavel HORAS
$hora=date("H:i:s");  //h:horas - i:minutos - s:segundos


//Data Para Constante faz assim:
define( "DATA", date("d/m/Y"));  
echo DATA;

echo"<br>"; //para mostrar a hora
echo"Hora: $hora";
echo"<br><br>";

const NOME_PESSOA = "Ozzy";
define("CURSO_PESSOA", "gastronomia");

$cargaHoraria = 1000;

$LimiteFalta = $cargaHoraria/4

?>

<ul>
    <li> Data: <?=$dataAtual?></li> <!-- Mostrando data variavel -->
    <li style ="font-weight:bold">Aluno:<?= NOME_PESSOA?> </li>
    <li> Curso:<?= CURSO_PESSOA?> </li>
    <li> Limite de faltas: <?=$LimiteFalta?> horas</li>  
 
</ul>

<?php

$teste = "PHP Intelephense";
echo $teste
?>

    
</body>
</html>
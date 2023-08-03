<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 Condicionais</title>
    <style>
        .piscar{
            color: red;
            font-weight: bold;
            animation: piscar 1s infinite;
        
        }
        @keyframes piscar {
         0% {
         opacity: 1;
        }
         50% {
         opacity: 0.5;
        }
        100% {
        opacity: 1;
        }
        }

        
    </style>
</head>
<body>
    <h1>Exercício 3</h1>

<?php
 $salarioFuncionario = 3010; 
 

 
    if($salarioFuncionario < 1500 ){
        $salarioNovo = $salarioFuncionario * 1.15;        
    } elseif ($salarioFuncionario <= 3000){
        $salarioNovo = $salarioFuncionario * 1.10;            
    } else{
        $salarioNovo = $salarioFuncionario * 1.05; 
    }
?> 

<p>Salário antingo: <span class="piscar">R$ <?=number_format($salarioFuncionario,2,',','.') ?> </span></p>

<p>Salário novo: <span class="piscar">R$ <?=number_format($salarioNovo,2,',','.') ?></span> </p>
    
    <!-- para usar o number_format() a var variavel fica dentro da aspas do number_format()  assim number_format($salarioFuncionario,2,',','.')  o 2 e as casa decimais depois a virgula(serve para separar os campos) ',' para colocar a virgula depois do decimais depois a virgula depois '.' para colocar no valor-->
    
    
</body>
</html>

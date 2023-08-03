<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Notas de um aluno </title>   
        

    </style>
</head>
<body>


<?php
 
   $alunos = ["Aline", "Beatriz", "Miguel"]; 
  
   function soma($nota1, $nota2, $nota3){

    //Variável de ESCOPO LOCAL
    $nota = ($nota1 + $nota2 + $nota3) / 3;
    return $nota;  
    
    

    
        
    }

    
?>
<?php


?>


    


<p>Aluno: <?= $alunos[0]?> com media de:<?=soma(2, 2, 5)?> </p>

<p>Aluno: <?= $alunos[1]?> com media de: <?=soma(8, 5, 5)?></p>

<p>Aluno: <?= $alunos[2]?> com media de: <?=soma(10, 10, 9)?> e você está </p>

<?php

?>







    
</body>
</html>
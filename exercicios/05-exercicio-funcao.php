<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 Função</title>
    <style>
        .aprovado {
            color: blue;
        }
        .reprovado {
            color: red
        }
       
        body{
            background-color: antiquewhite;    
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;     
        }

        table{
              margin: auto;
              width: 80%;
              max-width: 700px; 
              border-collapse: collapse;          
               
         
        }

        caption{          
              font-size: 30px;
              padding: 5px;              
        }

        th{
            background-color: #000000;
            color: #fff;
            
        }

        th, td{ 
            padding: 5px;
            font-size: 20px; 
            text-align: center; 
            border: 1px solid; 
                
        }
    </style>
</head>
<body>

<h2>1º parte</h2>

<?php
$nota1 = 8;
$nota2 = 10;
$nota3 = 1;

$media = ($nota1 + $nota2 + $nota3) / 3;


 $resultado = $media; 

 if($media >= 7 ){
    $resultado = "Aprovado";    
            
} else{
    $resultado = "Reprovado"; 
}

    
?> 

<p> Sua madia é <?=$media?> e você está <?=$resultado?> </p> 

<hr>

<h2>2º parte</h2>

<?php
    function media(int $nota1, $nota2, $nota3):string{

        //Variável de ESCOPO LOCAL
        $nota = ($nota1 + $nota2 + $nota3) /3;
        return $nota;
    }

    function situacao(int  $nota):string{
        
        if( $nota > 7 ){
            return "<b class='aprovado'>Aprovado</b>";
        } 
            return "<b class='reprovado'>Reprovado</b>";   
    }   

    ?>
    
    <p>Sua media é : <?=media(10, 8, 1)?> <?=situacao(7)?> </p> 

    <hr>

    <h2>3º parte</h2>

    

    <table>
       <thead>
          <tr>
               <!-- th é a celula de cabeçalho (th) -->
               <th>Aluno</th>
               <th>1º nota</th>
               <th>2º nota</th>
               <th>3º nota</th>
               <th>Media</th>
               <th>Situação</th>
          </tr>
       </thead>

    <?php

    $alunos = [
       [ 
          "aluno" => "Lucas",
          "nota1" => 10,
          "nota2" => 10,
          "nota3" => 10          
       ],

       [ 
         "aluno" => "Bruno",
         "nota1" => 7,
         "nota2" => 1,
         "nota3" => 10          
       ],

       [ 
        "aluno" => "Laís",
        "nota1" => 8,
        "nota2" => 7,
        "nota3" => 3,          
       ],

       [ 
        "aluno" => "Ana",
        "nota1" => 10,
        "nota2" => 10,
        "nota3" => 10,   
       ]    


    ];    
    foreach ($alunos as $aluno){       
    
    ?> 
    
       <tr>
             <td><?=$aluno["aluno"]?></td>
             <td><?=$aluno["nota1" ]?></td>
             <td><?=$aluno["nota2" ]?></td>
             <td><?=$aluno["nota3" ]?></td>
             <td><?=media($aluno["nota1"], $aluno["nota2"], $aluno["nota3"])?></td>
             <td><?=situacao(media($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]))?></td>
                            
        </tr> 
    
    
    <?php
    
    }    
    ?>

    </table> 

    

    
      

   



</body>
</html>

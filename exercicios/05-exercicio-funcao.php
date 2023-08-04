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
    function media($nota1, $nota2, $nota3){

        //Variável de ESCOPO LOCAL
        $nota = ($nota1 + $nota2 + $nota3) /3;
        return $nota;
    }

    function situacao(int  $nota):string{
        //Isso é chamado de EARLY RETURN
        // é possivel omitir o else neste caso
        if( $nota > 7 ){
            return "<b class='aprovado'>Aprovado</b>";
        } 
            return "<b class='reprovado'>Reprovado</b>";   
    }   

    ?>
    
    <p>Sua media é : <?=media(10, 8, 1)?> <?=situacao(7)?> </p> 

    <hr>

    <h2>3º parte</h2>

    <?php
    $clientes = 
      [ 
           "nome" => "Aline",
           "Nota1" => 10,
           "Nota2" => 10,
           "Nota3" => 10,

           
      ]

      ?>

   



</body>
</html>

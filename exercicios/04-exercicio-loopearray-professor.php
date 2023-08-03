<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Loop e Array</title>

    <style>
        body{
            background-color: beige;          
        }

        table, td, tr {
             border: 1px solid; 
             border-collapse: collapse;              
               
         
        }

        caption{          
              font-size: 30px;
              padding: 5px;              
        }

        th{
            background-color: #000000;
            color: #fff;
            padding: 0.5rem;
            
        }

        td{ 
            padding: 0.5rem;            
                
        }

        tr:nth-child(odd){
            background: lightblue;
        }

        tr:hover{
            background-color: bisque;
            

        }

        tr:hover{
            background-color: bisque;
            color: #000000;
        }


    </style>
</head>
<body>



<table>
    <!-- caption é o titulo/legenda -->
    <caption>Exercício 04 - Loop e Array </caption>

    <!-- tr é a linha da tabela -->
    
    <tr>
        <!-- th é a celula de cabeçalho (th) -->
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>
     
    
  <?php
   $linguagens = [
        "HTML" => "Estruturação P",
        "CSS" => "Estilos P",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL" => "Manipulação de dados",
        "Java" => "Softwares"     
      
      
   ];

    $id = 1;
    foreach ($linguagens as $linguagem => $descrição){       
   ?>          
            
        <tr>
            <td><?=$id?></td>
            <td><?=$linguagem?></td>
            <td><?=$descrição?></td>                
        </tr>          

    
   <?php   
      $id++;   
     }
    ?>
</table>
    
</body>
</html>
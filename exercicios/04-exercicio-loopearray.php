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
            /* border: 1px solid; */
                
        }
        tr:hover{
            background-color: dodgerblue;          

        }

        

    </style>
</head>
<body>



<table>
    <!-- caption é o titulo/legenda -->
    <caption>Exercício 04 - Loop e Array </caption>

    <!-- tr é a linha da tabela -->
    <thead>
       <tr>
             <!-- th é a celula de cabeçalho (th) -->
             <th>ID</th>
             <th>Linguagem</th>
             <th>Descrição</th>
       </tr>
    </thead>  
    
  <?php
   $clientes = [
      [ 
           "id" => 1,
           "linguagem" => "HTML",
           "descrição" => "Estruturação"
      ],

      [
           "id" => 2,
           "linguagem" => "CSS",
           "descrição" => "Estilos"
      ],

      [
           "id" => 3,
           "linguagem" => "JS",
           "descrição" => "Comportamentos"
      ],

      [
           "id" => 4,
           "linguagem" => "PHP",
           "descrição" => "Back-End"
      ],

      [
           "id" => 5,
           "linguagem" => "SQL",
           "descrição" => "Manipulação de dados"
      ],

      [
           "id" => 6,
           "linguagem" => "Java",
           "descrição" => "Softwares"
      ]
   ];

    foreach ($clientes as $cliente){
   ?>          
            
        <tr>
            <td><?=$cliente["id"]?></td>
            <td><?=$cliente["linguagem"]?></td>
            <td><?=$cliente["descrição"]?></td>                
        </tr>          

    
    <?php    
     }
    ?>
</table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>

    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: blue;
            font-size: 18px;
        }
        h1{
            text-align: center;
            color: red;
        }


        .container{
            display: flex;  
            flex-direction: row; 
            justify-content:space-between;          
            gap: 10px;           
        } 

        article{
           
            border: solid 5px red;
            border-radius: 30px;
            box-shadow: black 2px 2px 2px;
            width: 300px;
            height: 300px;
            margin: auto;
            padding: 10px;
           
        }

        
        

    </style>
</head>
<body>
   <main>
       <h1>Exercício 02</h1>
       <?php
       $pessoa1 = ["Aline Teixeira", "aline@teixeira", "T123456", 34, "feminino", "São Paulo" ];

       $pesssoa2 = [ "Mario Bros", "mario@bros","B654321", 40, "masculino", "Rio de Janeiro" ];
    
       ?>
       <div class="container">
         <article>   
             <h2>Dados Usuario 1 </h2>     
              <section>               
                  <p>Nome usuario: <?=$pessoa1[0]?></p>
                  <p>E-mail: <?=$pessoa1[1]?></p>
                  <p>Idade: <?=$pessoa1[3]?> anos</p>
                 <p>Sexo: <?=$pessoa1[4]?></p>
              </section>        
         </article>

         <article>  
              <h2>Dados Usuario 2 </h2>      
              <section>              
                 <p>Nome usuario: <?=$pesssoa2[0]?></p>
                 <p>E-mail: <?=$pesssoa2[1]?></p>
                 <p>Idade: <?=$pesssoa2[3]?> anos</p>
                 <p>Sexo: <?=$pesssoa2[4]?></p> 
              </section>        
         </article>
       </div>   

    </main>  



   




    
</body>
</html>
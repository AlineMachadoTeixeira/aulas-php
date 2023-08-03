<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays</title>

    <style>
    /* Formantando o li da ul --> odd --> elementos impares da lista */
    ul li:nth-child(odd) { color: blue;}
    /* Formantando o li da ul --> even --> elementos pares da lista */
    ul li:nth-child(even) { color: red;}   
    </style>

</head>
<body>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>
    <hr>

    <h2>Arrays com índice númerico</h2>

    <?php
     //Sintaxe com colchetes
     $bandas = ["Savatage", "Dio", "Rush"];

     //Sintaxe função arrays()
     $cursos = array("HTML", "Node", "PHP");

     //Sintaxe de atribuição manual
     $buteco[0] = "Bolinho de bacalhau";
     $buteco[1] = "Pastel";
     $buteco[2] = "Esfiha";

     //Constante de array (PHP 7 para cima)
     define("UNIDADES", ["Penha", "Tatuapé",]);
     const FRUTAS = ["Morango", "Abacaxi"];     
        
    ?>

    <h3>Acessando os dados / Arrays com índice númerico</h3>
    <ol>
        <li>Banda que mais gosto: <?=$bandas[2]?></li>  
        <li>Curso que básico de: <?=$cursos[0]?></li> 
        <li>Quero comer: <?= $buteco[1]?></li>     
        <!-- para constante que demos o nome de UNIDADES e FRUTAS-->
        <li>Estamos no Senac: <?=UNIDADES[0]?></li>
        <li>Fruta boa para vitamina: <?=FRUTAS[0]?></li>
    </ol>

    <hr>

    <h2>Array associativo</h2>

    <?php
    $curso = [
        //Chave associativa é baseada: identificador e valor / o e fica => assim
        // identificador => valor
        // Essa estrutura lembra o objeto
        "titulo" => "Gastronomia",
        "carga_horaria" => 150,
        "descritivo" => "Aprenda a ferver água"
    ];    
    ?>

    <h3>Acessando dados / Array associativo</h3>
    <p> Nome do curso : <?=$curso["titulo"]?> </p>
    <p>Carga horária: <?=$curso["carga_horaria"]?></p>
    <p>Descritivo: <?=$curso["descritivo"]?></p>  
    
    <hr>

    <h2>Matriz (array dentro de array)</h2>

    <?php
    $planoDeEstudos = [
        ["JS Avançado", "Node.js", "React"],
        ["PHP", "POO", "MySQL", "Python"],
        ["Teoria das Cores", "Photoshop", "UX/UI"]
    ];
    
    ?>

    <h3>Acessando dados / Matriz (array dentro de array)</h3>
    <ul>
      <li ><?=$planoDeEstudos[0][2]?></li>
      <li ><?=$planoDeEstudos[1][2]?></li>
      <li ><?=$planoDeEstudos[2][1]?></li>
      <li ><?=$planoDeEstudos[2][0]?></li>       
    </ul>

    <hr>

    <h2>Função de análise de estrutura de dados (debug/depuração)</h2>

    <h3>print_r</h3> <!-- saída de dados com detalhes o ruim que vem tudo em uma linha -->
    <pre> <!-- colocando o pre sai cada um em uma linha -->
    <?=print_r($bandas)?>
    </pre>

    <h3>var_dump()</h3> <!-- saída de dados com detalhes que o print_r  o ruim que vem tudo em uma linha -->
    <pre>
    <?=var_dump($bandas)?>
    </pre>

    <pre>
    <?=var_dump($planoDeEstudos)?>
    </pre>



    
</body>
</html>
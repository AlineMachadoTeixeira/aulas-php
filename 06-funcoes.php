<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou sub-rotina</h2>

<?php
function dadoAutor(){
?>
<div>
    <p>Tiago B. dos Santos</p>
    <p><a href="mailto">email@aa.com</a></p>
</div>
<?php
}
?>

<section>
    <h3>Chamada da Sub-rotina/procedimento</h3>
    <?=dadoAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadoAutor()?>
    </article>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso(){
        //return "Técnico em Informatica para Internet";
        return "<b>No WhatsApp</b>";
    }
    ?>
    <p>Estamos no curso de <?=dadosCurso()?> é ministrado no Senac Penha.</p>
    
    
</section>
</body>
</html>
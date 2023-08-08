
<!-- Recuperar/ descobrir qual nome da página  aberta no momento esse match só pode ser usado no PHP 8-->
<?php
$pagina = basename($_SERVER ['PHP_SELF']);

$titulo = match ($pagina){
    "index.php" => "Página inicial",
    "cursos.php" => "Cursos",
    "duvidas.php" => "Duvidas",
    "contato.php" => "Contatos"
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> Site PHP </title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1> Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Curso</a>
            <a href="duvidas.php">Duvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
        
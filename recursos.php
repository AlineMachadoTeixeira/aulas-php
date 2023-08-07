<?php
define("ESCOLA", "Senac");
$curso = "Técnico em Informatica para Internet";
$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificarIdade(int $idade):string{
    return $idade >= 18 ? "maior" : "menor";
}


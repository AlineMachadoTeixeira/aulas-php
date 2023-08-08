</main>

<footer>
    <p>Site criado para o curso <b>Téc. Informatica para Internet</b></p>

    <?php  

    // Definindo fuso horário (timezone)
    date_default_timezone_set("America/Sao_Paulo");

    $data = date("d/m/Y");
    $hora = date("H:i:s");
    ?>

    <p> <time><?= $data ?> <?= $hora ?> </time></p> <!-- time é uma tag semantica para hora  -->
    <p>Data: <?= $data ?> as <?= $hora ?> horário de São Paulo </p>

</footer>



</body>

</html>
</main>

<footer>
    <p>Site criado para o curso <b>Téc. Informatica para Internet</b></p>


    <?php
    // $data = "18/07/2023";

    // Definindo fuso horário (timezone)
    date_default_timezone_set("America/Sao_Paulo");

    $data = date("d/m/Y");
    $hora = date("H:i:s");
    ?>

    <p>Data: <?= $data ?> as <?= $hora ?> horário de São Paulo </p>

</footer>



</body>

</html>
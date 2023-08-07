</main>

    <footer>
        <p>Site criado para o curso <b>Téc. Informatica para Internet</b></p>
        

        <?php
        //Variavel HORAS
        $hora = date("H:i:s");  //h:horas - i:minutos - s:segundos
        //Data Para Constante faz assim:
        define("DATA", date("d/m/Y"));
        echo DATA;

        echo "<br>"; //para mostrar a hora
        echo "Hora: $hora";
        echo "<br><br>";
        
        ?>

        
    </footer>


    
</body>
</html>
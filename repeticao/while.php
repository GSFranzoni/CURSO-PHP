<div class="titulo">
    While/Do While
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        const VALOR_LIMITE = 5;
        $contador = 10;
        
        do {
            print "while $contador <br>";
            $contador++;
        }
        while($contador < VALOR_LIMITE);
        print '<hr>';

        $contador = 10;
        while($contador < VALOR_LIMITE) {
            print "while $contador <br>";
            $contador++;
        }
    ?>
</div>
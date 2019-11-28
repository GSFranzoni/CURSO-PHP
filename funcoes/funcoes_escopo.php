<div class="titulo">
    Funções & Escopo
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $valor = 0;
        function imprime() {
            print "Hello, world! <br>";
        }
        function trocar() {
            $valor = 1;
        }
        function trocarGlobal() {
            global $valor;
            $valor = 1;
        }
        imprime();
        trocar();
        print $valor. '<br>';
        trocarGlobal();
        print $valor. '<br>';
    ?>
</div>
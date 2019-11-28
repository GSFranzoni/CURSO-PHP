<div class="titulo">
    Argumentos & retorno
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function somaRef($a, $b, &$c) {
            $c = $a+$b;
        }
        function soma($a, $b) {
            return $a+$b;
        }
        function obterMensagem() {
            return 'Mensagem! <br>';
        }
        obterMensagem();
        print obterMensagem();
        soma(10, 20);
        print soma(10, 20). '<br>';
        $c = 0;
        somaRef(10, 10, $c);
        print $c. '<br>';
    ?>
</div>
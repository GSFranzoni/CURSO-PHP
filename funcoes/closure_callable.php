<div class="titulo">
    Closure & callable
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function executar($a, $b, $op, callable $funcao) {
            $resultado = $funcao($a, $b);
            print "$a $op $b = $resultado<br>";
        }
        function executar2($a, $b, $op, Closure $funcao) {
            $resultado = $funcao($a, $b);
            print "$a $op $b = $resultado<br>";
        }
        $soma = function($a, $b) {
            return $a+$b;
        };
        function soma_($a, $b) {
            return $a+$b;
        }
        print '<hr>';
        executar(10, 15, '+', soma_);
        executar2(10, 15, '+', $soma);

        print (is_callable($soma)? 'Sim': 'Não'). '<br>';
        $soma = 1;
        print (is_callable($soma)? 'Sim': 'Não'). '<br>';
    ?>
</div>
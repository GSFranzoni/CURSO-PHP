<div class="titulo">
    Função anônima
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function executar($a, $b, $op, $funcao) {
            $resultado = $funcao($a, $b);
            print "$a $op $b = $resultado<br>";
        }
        $soma = function($a, $b) {
            return $a+$b;
        };
        $multi = function($a, $b) {
            return $a*$b;
        };
        $div = function($a, $b) {
            return $a/$b;
        };
        $sub = function($a, $b) {
            return $a-$b;
        };
        
        executar(10, 15, '+', $soma);
        executar(10, 15, '-', $sub);
        executar(10, 15, '*', $multi);
        executar(10, 15, '/', $div);
    ?>
</div>
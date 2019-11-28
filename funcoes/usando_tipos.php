<div class="titulo">
    Usando tipos
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function soma($a, $b) {
            print "Somando $a + $b = ";
            return $a+$b;
        }
        function somaInt(int $a, int $b): int {
            print "Somando $a + $b = ";
            return $a+$b;
        }
        print(soma(10, '10dois')). '<br>';
        print(somaInt(10, 10)). '<br>';
    ?>
</div>
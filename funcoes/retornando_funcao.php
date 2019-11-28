<div class="titulo">
    Retornando função
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function soma($a) {
            return function($b) use ($a) {
                return $a+$b;
            };
        }

        print soma(3)(5). '<br>';

        $doisMais = soma(2);

        print $doisMais(5). '<br>';
    ?>
</div>
<div class="titulo">
    Foreach
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $matrix = [
            ['a', 'e', 'i', 'o', 'u'],
            ['b', 'c', 'd']
        ];
        $dias = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado"];
        foreach ($dias as $key => $value) {
            print '['.$key.'] '. $value. '<br>';
        }
        print '<hr>';
        foreach ($dias as $value) {
            print $value. '<br>';
        }
        print '<hr>';
        foreach ($matrix as $linha) {
            foreach ($linha as $letra) {
                print $letra. ' ';
            }
            print '<br>';
        }
        print '<hr>';
        $numeros = [1, 2, 3, 4, 5];
        foreach ($numeros as &$value) {
            $value*=2;
            print $value. ' ';
        }
        print '<br><hr>';
        print_r($numeros);
    ?>
</div>
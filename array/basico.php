<div class="titulo">
    Básico - Array
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $lista = array(1, 2, 3, 4, 3.5, 'texto');

        print var_dump($lista). '<br>';

        foreach ($lista as $key => $value) {
            print $key. ' ';
        }
        print '<br>';

        print print_r($lista). '<br>';

        print $lista[0]. '<br>';

        for($i=0; $i<6; $i++) {
            print $lista[$i]. ' ';
        }

        $str = 'á1éíúó';
        print '<br>'. $str[0]. '<br>'; // cuidado

        print mb_substr($str, 0, 1);
    ?>
</div>
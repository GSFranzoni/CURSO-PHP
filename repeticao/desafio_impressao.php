<div class="titulo">
    Desafio impressão
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $array = [
            "AAA",
            "BBB",
            "CCC",
            "DDD",
            "EEE",
            "FFF"
        ];
        for($i=0; $i<count($array); $i++) {
            if($i%2==1) continue;
            print "$array[$i] ";
        }
        print '<hr>';
        foreach ($array as $key => $value) {
            if($key%2==1) continue;
            print "$value ";
        }
    ?>
</div>
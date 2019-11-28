<div class="titulo">
    Desafio recursividade
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10]; 
        
        function busca($array, $profundidade = 1) {
            for($i=0; $i<count($array); $i++) {
                if(is_array($array[$i])) {
                    busca($array[$i], $profundidade+1);
                }
                else {
                    print str_repeat('>', $profundidade). ' '. $array[$i]. '<br>';
                }
            }
        }
        busca($array);
    ?>
</div>
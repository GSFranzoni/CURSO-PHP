<div class="titulo">
    Map & Filter
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $notas = [5.8, 7.3, 9.8, 6.7];
        $notas_finais = array_map(round, $notas);
        $aprovados = array_filter($notas_finais, function($value) {
            return $value>=7;
        });
        print_r($notas_finais);
        print '<hr>';
        print_r($aprovados);
    ?>
</div>
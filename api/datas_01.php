<div class="titulo">
    Datas #01
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        print time(). '<br>';
        print Date('D, d \d\e M \d\e Y H:i A'). '<br>';
        print strftime('%A, %d de %B de %Y', time()). '<br>';
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
        print strftime('%A, %d de %B de %Y', time()). '<br>';

        $amanha = time() + (60*60*24);
        print strftime('%A, %d de %B de %Y, %H:%M', $amanha). '<br>';
        $proximaSemana = strtotime('+1 week');
        print strftime('%A, %d de %B de %Y', $proximaSemana). '<br>';

        $dataFixa = mktime(14, 30, 12, 7, 4, 1997);
        print strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa). '<br>';
    ?>
</div>
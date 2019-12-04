<div class="titulo">
    Datas #02
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $format1 = 'D, d \d\e M \d\e Y';
        $format2 = '%A, %d de %B de %Y';
        $format3 = "%A, %d de %B de %Y - %H:%M:%S";

        $agora = new DateTime();

        print_r($agora);
        print '<br>';

        print $agora->format($format1). '<br>';

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        print 'Hoje: '. strftime($format2, $agora->getTimestamp()). '<br>';

        $amanha = new DateTime("+1 day");
        print 'Amanhã: '. strftime($format2, $amanha->getTimestamp()). '<br>';

        $ontem = new DateTime("-1 day");
        print 'Ontem: '. strftime($format2, $ontem->getTimestamp()). '<br>';
    
        $dataFixa = new DateTime("04-07-1997 15:30:50");
        print 'DataFixa: '. strftime($format3, $dataFixa->getTimestamp()). '<br>';
    
        $amanha->modify("+1 day");
        print 'Amanhã + 1: '. strftime($format2, $amanha->getTimestamp()). '<br>';

        $amanha->setDate(1997, 07, 04);
        print 'setDate: '. strftime($format2, $amanha->getTimestamp()). '<br>';

        $dataMin = new DateTime('2000-01-01');
        $dataMax = new DateTime('2000-12-31');
        $dataTeste = new DateTime('2000-07-04');

        print (($dataTeste>=$dataMin and $dataTeste<=$dataMax)? 'Entre': 'Fora'). '<br>';

        $tz = new DateTimeZone('America/Sao_Paulo');
        $agora = new DateTime(null, $tz);
        print $agora->format('d/M/Y H:i:s'). "<br>";
    ?>
</div>
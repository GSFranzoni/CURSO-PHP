<div class="titulo">
    Laço for
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        for($i=0; $i<5; $i++) {
            for($j=0; $j<$i+1; $j++) {
                print "#";
            }
            print '<br>';
        }
        print '<hr>';
        $impressao='';
        for($i=0; $i<5; $i++) {
            $impressao.='#';
            print $impressao.'<br>';
        }
        print '<hr>';
        for($impressao='#'; $impressao!='######'; $impressao.='#') {
            print $impressao.'<br>';
        }
    ?>
</div>
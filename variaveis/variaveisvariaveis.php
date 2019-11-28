<div class="titulo">
    Variáveis variáveis
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        $a = 'valorA';
        $$a = 'ValorAA';
        print "$a {$$a} ${$a} $valorA". '<br>';

        $epa = 'opa';
        $opa = 'vish';
        $vish = 'azedou';
        print "$epa {$opa} {$$epa} {$$$epa}"
    ?>
</div>
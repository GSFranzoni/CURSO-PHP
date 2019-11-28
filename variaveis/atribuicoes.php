<div class="titulo">
    Atribuições
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        $numero = 10;
        print $numero. '<br>';
        $numero = $numero + 1;
        print $numero. '<br>';
        $numero++;
        print $numero. '<br>';
        $numero+=1;
        print $numero. '<br>';
        ++$numero;
        print $numero. '<br>';
        $numero = $numero - 1;
        print $numero. '<br>';
        $numero--;
        print $numero. '<br>';
        $numero-=1;
        print $numero. '<br>';
        --$numero;
        print $numero. '<br>';
        $numero*=5;
        print $numero. '<br>';
        $numero/=5;
        print $numero. '<br>';
        $numero%=2;
        print $numero. '<br>';
        $numero**=2;
        print $numero. '<br>';
        $numero.=2;
        print $numero. '<br>';
        
        print $var ?? 'Default'. '<br>';
    ?>
</div>
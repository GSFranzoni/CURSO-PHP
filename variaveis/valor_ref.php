<div class="titulo">
    Valor/Referência
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        $var = 'Valor inicial';
        $varValor = $var;
        $varValor = 'Valor mudado Valor';
        $varRef = &$var;
        $varRef = 'Valor mudado Ref';
        print "{$var} <br> {$varRef} <br> {$varValor} <br>"
    ?>
</div>
<div class="titulo">
    Tipo String
</div>
<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        echo "Eu sou uma string". '<br>';
        echo var_dump('Eu também'). '<br>';
        echo "'teste'". '<br>';
        echo '\'teste\''. '<br>';
        print 'testando print()'. '<br>';
        print strtoupper('maximizado').'<br>';
        print strtolower('minimizado').'<br>';
        print ucfirst('só a primeira letra').'<br>';
        print ucwords('todas as palavras').'<br>';
        print strlen('Quantas letras?').'<br>';
        print mb_strlen('Quantas letras?').'<br>';
        print substr('Quantas letras?', 0, 7).'<br>';
        print str_replace('letras', 'l3tr4s', 'Quantas letras?').'<br>';
    ?>
<div>
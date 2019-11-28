<div class="titulo">
    Require && Return
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        echo 'Executei essa linha do arquivo require_return <br>';
        
        $valor = require('return_usado.php');
        print $valor. '<br>';
        require('return_nao_usado.php');
        print $variavelDeclarada. '<br>';

        print 'Diretório do arquivo atual: '. __DIR__. '<br>';
    ?>
</div>
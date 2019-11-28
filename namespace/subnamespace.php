<?php namespace App;?>

<div class="titulo">
    Sub Namespace
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        print __NAMESPACE__. '<br>';
        const constante = 123;

        namespace App\Principal;

        print __NAMESPACE__. '<br>';
        const constante = 123;

        namespace App\Principal\Especifico;
        print __NAMESPACE__. '<br>';
        const constante = 123;

        print constante. '<br>';
        print \App\Principal\constante. '<br>';
        print \App\Principal\Especifico\constante. '<br>';
    ?>
</div>
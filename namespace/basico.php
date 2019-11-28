<?php namespace contexto;?>

<div class="titulo">
    Namespace - Básico
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        print __NAMESPACE__. '<br>';
        const constante = 123; // cria constante no namespace atual
        define('contexto\constante2', 123); // precisa mostrar o namespace para criar a constante
                                            // por padrão a constante vai referenciar o namespace raiz do php
        define(__NAMESPACE__.'\constante3', 123);
        define('outro_contexto\constante4', 123);

        print \contexto\constante. '<br>';
        print \outro_contexto\constante4. '<br>';
    ?>
</div>
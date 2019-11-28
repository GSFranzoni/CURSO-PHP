<?php namespace Outro\Nome;?>

<div class="titulo">
    Use/As
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        print __NAMESPACE__. '<br>';
        include('use_as_arquivo.php');

        function soma($a, $b) {
            return $a.$b; 
        }

        class Classe {
            public $var;

            function func() {
                print __NAMESPACE__. ' -> '. __CLASS__ . ' -> '. __METHOD__. '<br>';
            }
        }

        echo \Nome\Bem\Grande\constante1. '<br>';

        print soma(10, 20). '<br>';

        use Nome\Bem\Grande as ctx_reduzido;

        use function Nome\Bem\Grande\soma as somaReal;

        print ctx_reduzido\soma(10, 20). '<br>';

        print somaReal(10, 20). '<br>';

        $a = new Classe();
        $a->func();

        $b = new \Nome\Bem\Grande\Classe();
        $b->func();

        $c = new ctx_reduzido\Classe();
        $c->func();

        use \Nome\Bem\Grande\Classe as D;

        $d = new D();
        $d->func();
    ?>
</div>
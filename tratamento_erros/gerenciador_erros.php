<div class="titulo">
    Error Handler
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        ini_set('display_errors', 1);
        //print 4/0;

        error_reporting(E_ERROR);
        //print 4/0;

        error_reporting(~E_ALL);
        //print 4/0;

        error_reporting(E_ALL);
        //print 4/0;

        include 'arquivo_inexistente.php';

        function filtrar($erro, $errstring) {
            $text = 'include';
            return !!stripos(" $errstring", $text);
        }

        print '<hr>';

        set_error_handler('filtrar', E_WARNING);

        print 4/0;
        include 'arquivo_inexistente.php';
    ?>
</div>
<div class="titulo">
    Gerenciando sessão
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        error_reporting(E_ERROR);
        //session_id('98862aa9a5fb78014b34a7cf55c8498c');
        session_start();

        print session_id(). '<br>';
        
        $contador = &$_SESSION['contador'];

        $contador = $contador? $contador+1: 1;

        print $_SESSION['contador']. '<br>';

        if($_SESSION['contador'] %5 == 0) {
            session_regenerate_id();
        }

        if($_SESSION['contador'] >=15) {
            session_destroy();
        }
    ?>
</div>
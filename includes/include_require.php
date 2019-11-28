<div class="titulo">
    Include vs Require
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        echo 'Executei essa linha do arquivo include_require <br>';
        include('arquivo_inexistente.php'); // aplicação continua, se houver erros
        print 'Olá! <br>';

        require('arquivo_inexistente.php'); // aplicação irá parar, se houver erros
        print 'Olá! <br>'
    ?>
</div>
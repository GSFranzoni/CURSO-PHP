<div class="titulo">
    Include
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        echo 'Executei essa linha do arquivo include <br>';
        include('include_arquivo.php');
        include('include_arquivo.php');

        print soma(10, 20). '<br>';
        print "O conteúdo da variável é: ". $variavel. '<br>';
    ?>
</div>
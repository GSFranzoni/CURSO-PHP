<div class="titulo">
    Include
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        print 'Carregando o arquivo include_funcao <br>';
        function hello() {
            include('include_arquivo.php');
        }
        hello();
        print soma(10, 20);
    ?>
</div>
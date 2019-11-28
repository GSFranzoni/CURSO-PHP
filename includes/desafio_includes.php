<div class="titulo">
    Desafio includes
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        include_once('Pessoa.php');
        include_once('Usuario.php');
        $p = new Pessoa('Guilherme', 22);
        $u = new Usuario('Guilherme', 22, 'aln10453-1');
    ?>
</div>
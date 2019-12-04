<div class="titulo">
    Criar banco
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        require_once("conexao.php");

        $conexao = novaConexao(null);
        $sql = 'create database if not exists cursophp';
        $conexao->query($sql);
    ?>
</div>
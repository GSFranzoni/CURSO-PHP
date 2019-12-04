<div class="titulo">
    Excluir #1
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        require_once("conexao.php");
        $conexao = novaConexao();
        $sql = "DELETE FROM Cadastro where id=3";
        $resultado = $conexao->query($sql);
        print $resultado? 'Sucesso :) <br>': 'Error: '. $conexao->error. '<br>';
    ?>
</div>
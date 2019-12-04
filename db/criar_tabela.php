<div class="titulo">
    Criar tabela
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        require_once("conexao.php");

        $sql = 'CREATE TABLE IF NOT EXISTS Cadastro(
            id int(6) unsigned auto_increment PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            nascimento Date,
            email VARCHAR(100) NOT NULL,
            site VARCHAR(100),
            filhos int,
            salario float
        )';
        $conexao = novaConexao();
        $resultado = $conexao->query($sql);
        print ($resultado)? 'Sucesso :)'. '<br>': 'Erro: '. $conexao->error. '<br>';
        $conexao->close();
    ?>
</div>
<div class="titulo">
    Inserir #1
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        require_once("conexao.php");

        $sql = "insert into Cadastro (nome, nascimento, email, site, filhos, salario)
                    values (
                        'Guilherme', 
                        '1997-07-04', 
                        'gui@email.com', 
                        'https://google.com', 
                        0, 
                        650
                )";
        $conexao = novaConexao();
        $resultado = $conexao->query($sql);

        print $resultado? 'Sucesso :) <br>': 'Erro: '. $conexao->error. '<br>';

        $conexao->close();
    ?>
</div>
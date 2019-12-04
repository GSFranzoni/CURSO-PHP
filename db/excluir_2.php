<div class="titulo">
    Excluir #2
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php
    require_once 'conexao.php';
    $conexao = novaConexao();

    if($_GET['excluir']) {
        $excluir = $_GET['excluir'];
        $sql = "delete from Cadastro where id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('i', $excluir);
        $resultado = $stmt->execute();
        print $resultado ? 'Registro escluído com sucesso :) <br>' : 'Error: ' . $conexao->error . '<br>';

    }


    $sql = "select id, nome, email, nascimento from Cadastro";
    $resultado = $conexao->query($sql);
    print $resultado ? 'Sucesso :) <br>' : 'Error: ' . $conexao->error . '<br>';

    $registros = [];
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    }
    ?>
</div>

<table class='table table-bordered table-hover table-striped'>
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['nascimento'] ?></td>
                <td><a href="<?= 'exercicio.php?dir=db&file=excluir_2&excluir='. $row['id'] ?>" class='btn btn-danger text-white'>Excluir</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>
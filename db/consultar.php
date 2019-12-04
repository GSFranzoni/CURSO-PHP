<div class="titulo">
    Consultar
</div>

<div style='padding: 20px; font-size: 1.2rem;'>
    <?php
    require_once("conexao.php");

    $conexao = novaConexao();
    $sql = 'select id, nome, email, nascimento from Cadastro;';
    $resultado = $conexao->query($sql);
    $registros = [];
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] =  $row;
        }
    } else {
        print 'Error: ' . $conexao->error . '<br>';
    }
    $conexao->close();
    ?>
</div>

<table class='table table-hover table-striped table-bordered'>
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <?= date('d/m/Y', strtotime($row['nascimento'])) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>
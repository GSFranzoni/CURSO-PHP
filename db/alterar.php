<div class="titulo">
    Alterar
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php

    function showError(array $erros, string $field)
    {
        if (count($_POST) > 0 and $erros[$field]) {
            print "
                    <div style='font-size: 0.8rem;' class='invalid-feedback'>
                        * " . $erros[$field] . "
                    </div>
                ";
        }
    }

    require_once("conexao.php");
    $codigo = $_GET['id'];
    $conexao = novaConexao();
    $erros = [];
    $dados = [];
    if ($_GET['id']) {
        $sql = "SELECT * FROM Cadastro where id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('i', $codigo);

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            if ($resultado->num_rows > 0) {
                $dados = $resultado->fetch_assoc();
            }
        }
        $conexao->close();
    }

    $dados = count($_POST)>0? $_POST: $dados;

    print var_dump(count($_POST)>0);
    if(count($_POST)>0) {
        print_r($dados);
        //exit();

    }

    if (!isset($dados['nome'])) {
        $erros['nome'] = 'O campo nome é obrigatório!';
    }
    if (isset($dados["nascimento"])) {
        $dados["nascimento"] = (new DateTime($dados['nascimento']))->format('d/m/Y');
        if (!$dados["nascimento"]) {
            $erros["nascimento"] = 'Data de estar no padrão dd/mm/aaaa!';
        }
    } else {
        $erros['nascimento'] = 'O campo data é obrigatório!';
    }
    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'O campo e-mail é obrigatório!';
    }
    if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'O campo site é obrigatório!';
    }
    $filhosConfig = ['options' => ['decimal' => '0', 'max_range' => 16]];
    if (
        !isset($dados["filhos"])
        or (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig)
            and $dados['filhos'] != 0)
    ) {
        $erros['filhos'] = 'Quantidade de filhos inválida!';
    }
    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido!';
    }

    if(count($_POST)>0) {

        if (!count($erros)) {
            $conexao = novaConexao();
            $sql = 'update Cadastro set nome=?, nascimento=?, email=?, site=?, filhos=?, salario=? where id=?';
            $params = [
                $dados['nome'],
                $dados['nascimento'],
                $dados['email'],
                $dados['site'],
                $dados['filhos'],
                $dados['salario'],
                $dados['id']
            ];
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param('ssssidi', ...$params);
            if($stmt->execute()) {
                unset($dados);
            }
            $conexao->close();
        }
    }

    ?>

    <form action="/Projects/test/exercicio.php" method="get">
        <input type="hidden" name='dir' value='db'>
        <input type="hidden" name="file" value='alterar'>
        <div class="form-group row">
            <div class='col-sm-4'>
                <input placeholder="Código" type="number" name="id" id="id" class='form-control' value="<?= $codigo ?>">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-success mb-4">Consultar</button>
            </div>
        </div>
    </form>

    <?php if (isset($dados)) : ?>
        <form action="#" method="post">
            <div class="form-row">
                <input type="hidden" id="id" name="id" value="<?= $dados['id'] ?>">
                <div class="form-group col-md-8">
                    <label for="nome">Nome</label>
                    <input value="<?= $dados['nome'] ?>" type="text" name="nome" id="nome" class='form-control <?= $erros['nome'] ? 'is-invalid' : 'is-valid' ?>' placeholder="Nome">
                    <?= showError($erros, 'nome') ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimento">Nascimento</label>
                    <input value="<?= $dados['nascimento'] ?>" type="text" class='form-control <?= $erros['nascimento'] ? 'is-invalid' : 'is-valid' ?>' name="nascimento" id="nascimento" placeholder="Nascimento">
                    <?= showError($erros, 'nascimento') ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input value="<?= $dados['email'] ?>" type="text" name="email" id="email" class='form-control <?= $erros['email'] ? 'is-invalid' : 'is-valid' ?>' placeholder="E-mail">
                    <?= showError($erros, 'email') ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="site">Site</label>
                    <input value="<?= $dados['site'] ?>" type="text" class='form-control <?= $erros['site'] ? 'is-invalid' : 'is-valid' ?>' name="site" id="site" placeholder="Site">
                    <?= showError($erros, 'site') ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="filhos">Quantidade de filhos</label>
                    <input value="<?= $dados['filhos'] ?>" type="number" name="filhos" id="filhos" class='form-control <?= $erros['filhos'] ? 'is-invalid' : 'is-valid' ?>' placeholder="Quantidade de filhos">
                    <?= showError($erros, 'filhos') ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="salario">Salário</label>
                    <input value="<?= $dados['salario'] ?>" type="text" class='form-control <?= $erros['salario'] ? 'is-invalid' : 'is-valid' ?>' name="salario" id="salario" placeholder="Salário">
                    <?= showError($erros, 'salario') ?>
                </div>
            </div>
            <button class="btn btn-primary btn-lg col-md-6 float-right">Enviar</button>
        </form>
    <?php endif ?>
</div>
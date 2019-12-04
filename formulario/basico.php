<div class="titulo">
    Formulário - Básico
</div>

<?php  

    $erros = [];

    function showError(array $erros, string $field) {
        if($erros[$field]){
            print "
                <div style='font-size: 0.8rem;' class='invalid-feedback'>
                    * ". $erros[$field]. "
                </div>
            ";
        }
    }

    if(count($_POST) > 0) {
        // isset($_POST['nome'])
        if(!filter_input(INPUT_POST, "nome")) {
            $erros['nome'] = 'O campo nome é obrigatório!';
            //print 'Nome é obrigatório'. '<br>';
        }
        if(filter_input(INPUT_POST, "nascimento")) {
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data) {
                $erros['nascimento'] = 'Data de estar no padrão dd/mm/aaaa!';
                //print 'Data de estar no padrão dd/mm/aaaa'. '<br>';
            }
        }
        else {
            $erros['nascimento'] = 'O campo data é obrigatório!';
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $erros['email'] = 'O campo e-mail é obrigatório!';
        }
        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
            $erros['site'] = 'O campo site é obrigatório!';
        }
        $filhosConfig = ['options' => ['decimal' => '0', 'max_range' => 16]];
        if(!filter_input(INPUT_POST, "nascimento") 
            or (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) 
            and $_POST['filhos']!=0)) {
            $erros['filhos'] = 'Quantidade de filhos inválida!';
        }
        $salarioConfig = ['options' => ['decimal' => ',']];
        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
            $erros['salario'] = 'Salário inválido!';
        }
    }
?>
<div style='padding: 20px; font-size: 1.4rem;'>
    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input value="<?= $_POST['nome'] ?>" type="text" name="nome" id="nome" class='form-control <?= $erros['nome']? 'is-invalid': 'is-valid' ?>' placeholder="Nome">
                <?= showError($erros, 'nome') ?>
            </div>
            <div class="form-group col-md-4">
                <label for="nascimento">Nascimento</label>
                <input value="<?= $_POST['nascimento'] ?>" type="text" class='form-control <?= $erros['nascimento']? 'is-invalid': 'is-valid' ?>' name="nascimento" id="nascimento" placeholder="Nascimento">
                <?= showError($erros, 'nascimento') ?>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input value="<?= $_POST['email'] ?>" type="text" name="email" id="email" class='form-control <?= $erros['email']? 'is-invalid': 'is-valid' ?>' placeholder="E-mail">
                <?= showError($erros, 'email') ?>
            </div>
            <div class="form-group col-md-6">
                <label for="site">Site</label>
                <input value="<?= $_POST['site'] ?>" type="text" class='form-control <?= $erros['site']? 'is-invalid': 'is-valid' ?>' name="site" id="site" placeholder="Site">
                <?= showError($erros, 'site') ?>
            </div>
            <div class="form-group col-md-6">
                <label for="filhos">Quantidade de filhos</label>
                <input value="<?= $_POST['filhos'] ?>" type="number" name="filhos" id="filhos" class='form-control <?= $erros['filhos']? 'is-invalid': 'is-valid' ?>' placeholder="Quantidade de filhos">
                <?= showError($erros, 'filhos') ?>
            </div>
            <div class="form-group col-md-6">
                <label for="salario">Salário</label>
                <input value="<?= $_POST['salario'] ?>" type="text" class='form-control <?= $erros['salario']? 'is-invalid': 'is-valid' ?>' name="salario" id="salario" placeholder="Salário">
                <?= showError($erros, 'salario') ?>
            </div>
        </div>
        <button class="btn btn-primary btn-lg col-md-6 float-right">Enviar</button>
    </form>
</div>
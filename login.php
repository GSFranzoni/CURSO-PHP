
<?php
    if(session_status()!=PHP_SESSION_ACTIVE) session_start(); 
    //ini_set('display_errors', 0); 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    if($_POST['email']) {
        $usuarios = [
            [
                "nome" => "Aluno Cod3r",
                "email" => "aluno@cod3r.com.br",
                "senha" => "123456"
            ], 
            [
                "nome" => "Outro aluno",
                "email" => "outro@cod3r.com.br",
                "senha" => "654321"
            ]
        ];
        foreach ($usuarios as $usuario) {
            if($email == $usuario['email'] and $senha == $usuario['senha']) {
                $_SESSION['errors'] = null;
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['senha'] = $senha;

                $expiracao = time() + (60*60*24*30);
                setcookie('nome', $usuario['nome'], $expiracao);
                //header('Location: index.php');
            }
        }

        if(!$_SESSION['nome']) {
            $_SESSION['errors'] = ['Usuário/Senha inválido(a)!'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/exercicio.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Curso PHP</title>
</head>

<body class='login'>
    <header class='header'>
        <h1>Curso PHP</h1>
        <h2>Seja bem vindo!</h2>
    </header>
    <main class='main'>
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['errors']): ?> 
                <div class="erros">
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <p><?= $error?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name='email' id='email'>
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name='senha' id='senha'>
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class='footer'>
        COD3R & ALUNOS <?= date("Y"); ?>
    </footer>
</body>

</html>
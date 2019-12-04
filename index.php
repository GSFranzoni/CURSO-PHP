<?php 
    //error_reporting(0);
    if(session_status()!=PHP_SESSION_ACTIVE) session_start(); 

    if($_COOKIE['nome']) {
        $_SESSION['nome'] = $_COOKIE['nome'];
    }

    if(!$_SESSION['nome']) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/exercicio.css">
    <title>Curso PHP</title>
</head>

<body class='index'>
    <header class='header'>
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <nav class='nav'>
        <span class="usuario">Usuário: <?= $_SESSION['nome'] ?></span>
        <a class='vermelho' href="logout.php">Sair</a>
    </nav>
    <main class='main'>
        <div class="conteudo">
            <?= require_once('menu.php'); ?>
        </div>
    </main>
    <footer class='footer'>
        COD3R & ALUNOS <?= date("Y"); ?>
    </footer>
</body>

</html>
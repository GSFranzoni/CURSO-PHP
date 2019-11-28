<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/exercicio.css">
    <title>Visualização do exercício</title>
</head>

<body class='exercicio'>
    <header class='header'>
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <nav class='nav'>
        <a href="<?= $_GET['dir'].'/'.$_GET['file'] ?>.php" class='verde'>Sem formatação</a>
        <a href="index.php" class='vermelho'>Voltar</a>
    </nav>
    <main class='main'>
        <div class="conteudo">
            <?php
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class='footer'>
        COD3R & ALUNOS <?= date("Y"); ?>
    </footer>
</body>

</html>
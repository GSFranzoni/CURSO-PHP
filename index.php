<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header class='header'>
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <main class='main'>
        <div class="conteudo">
            <?=require_once('menu.php');?>
        </div>
    </main>
    <footer class='footer'>
        COD3R & ALUNOS <?= date("Y"); ?>
    </footer>
</body>

</html>
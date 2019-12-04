<?php
session_start();

print_r($_SESSION) . '<br>';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['nome'] ?>
</p>

<?php
$_SESSION['email'] = 'guilherme@email.com';
$_SESSION['nome'] = 'guilherme';
?>

<p>
    <a href="/Projects/test/sessao/basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="/Projects/test/sessao/basico_sessao_limpar.php">Limpar</a>
</p>
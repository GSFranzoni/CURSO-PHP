<div class="titulo">
    Integração CSS
</div>
<?php
    $size = 2;
    $cor = "blue";
?>

<style>
    [<?= $cor ?>] {
        color: <?= $cor?>;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [double] {
        font-size: <?= $size*2 ?>rem;
    }
</style>

<h1 <?= $cor ?> double>Olá, mundo!</h1>

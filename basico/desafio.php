<div class="titulo">
    Desafio Soma
</div>

<?php 
    function soma($x, $y) {
        return $x+$y;
    }
?>

<ul>
    <li>1 + 1 = <?php echo 1+1 ?></li>
    <li>4 + 4 = <?= 4+4 ?></li>
    <li>8 + 8 = <?php echo soma(8, 8); ?></li>
</ul>
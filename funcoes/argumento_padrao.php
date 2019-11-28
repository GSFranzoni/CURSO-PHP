<div class="titulo">
    Argumento padrão
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function anotar($comida, $bebida = 'Suco') {
            return 'Comer '. $comida . ' e beber '. $bebida. '<br>';
        }
        print(anotar('Hambúrguer'));
        print(anotar('Hambúrguer', 'Água'));
    ?>
</div>
<div class="titulo">
    Operador ternário
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $idade = 64;
        $status = $idade>=18? ($idade>=65)? "Aposentado": "Maior de idade": "Menor de idade";

        echo 'Idade: '. $idade. '<br>';
        echo 'Status: '. $status. '<br>';
    ?>
</div>
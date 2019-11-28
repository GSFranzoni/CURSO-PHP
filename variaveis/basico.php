<div class="titulo">
    Variáveis - Básico
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        $numeroA = 13;
        $numeroB = 12;
        $somaAB = $numeroA+$numeroB;
        echo $numeroA. '<br>';
        print var_dump($numeroA). '<br>';
        print isset($somaAB). '<br>';
        print isset($somaABC). '<br>';
        $somaAB = "Agora sou uma string! <br>";
        print $somaAB;
    ?>
</div>
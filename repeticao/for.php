<div class="titulo">
    Laço for
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $dias = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado"];
        for($i=0; $i<7; $i++) {
            print "[$i] ". $dias[$i]. '<br>';
        }
    ?>
</div>
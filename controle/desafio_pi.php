<div class="titulo">
    Desafio PI
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $pi = 3.14;
        if(abs($pi-pi())<=0.01) {
            print "São iguais! <br>";
        } 
        else {
            print "São diferentes! <br>";
        }

        $pi_e = 3.28;
        if(abs($pi_e-pi())<=0.01) {
            print "São iguais! <br>";
        } 
        else {
            print "São diferentes! <br>";
        }
    ?>
</div>
<div class="titulo">
    Recursividade
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        function factorial($x) {
            return ($x==0 || $x==1)? 1: $x * factorial($x-1);
        }
        $x = 5;
        $fat = factorial($x);
        print "Fatorial de $x = $fat <br>";
    ?>
</div>
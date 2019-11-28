<div class="titulo">
    Break/Continue
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        for($i=0;; $i++) {
            if($i>=5){
                break;
            }
            else if($i>=3) {
                continue;
            }
            print " [$i] Ok! <br>";
        }
    ?>
</div>
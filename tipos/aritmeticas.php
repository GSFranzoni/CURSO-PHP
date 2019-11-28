<div class="titulo">
    Operações Aritméticas
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php  
        echo 1+1, '<br>';
        echo var_dump(1+1.1), '<br>';
        echo 1+2.5, '<br>';
        echo 10-2, '<br>';
        echo 2*5, '<br>';
        echo 7/4, '<br>';
        echo intdiv(7, 4), '<br>';
        echo round(7/4), '<br>';
        echo 7%4, '<br>';
        echo 7%2==1? 'Ímpar': 'Par', '<br>';
        //echo intdiv(7, 0), '<br>'; // erro
        echo 4**2, '<br>';
        echo "<p> Precedência </p>";
        echo 2+3*4, '<br>';
        echo (2+3)*4, '<br>';
        echo 2+3*4**2, '<br>';
        echo ((2+3)*4)**2, '<br>';
    ?>
</div>
<div class="titulo">
    Tipo Boolean
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        print 'True: '. true . '<br>';
        print 'False: '. false . '<br>';
        print var_dump(true). '<br>';
        print var_dump(false). '<br>';
        print var_dump('false'). '<br>';
        print is_bool(false). '<br>';
        print is_bool('true'). '<br>';

        print 'Regras <br>';
        print var_dump((bool) 0). '<br>';
        print var_dump((bool) 20). '<br>';
        print var_dump((bool) -1). '<br>';
        print var_dump((bool) ""). '<br>'; // false
        print var_dump((bool) "0"). '<br>'; // false
        print var_dump((bool) "00"). '<br>';
        print var_dump((bool) " "). '<br>'; 
        print var_dump((bool) "false"). '<br>';
        print var_dump(!!"false"). '<br>'; // outra maneira
    ?>
</div>

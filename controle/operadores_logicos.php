<div class="titulo">
    Operadores lógicos
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        print "<br><br>NOT<br><hr>";
        var_dump(true).'<br>';
        var_dump(false).'<br>';

        print "<br><br>AND<br><hr>";
        var_dump(true && true).'<br>';
        var_dump(true && false).'<br>';
        var_dump(false and true).'<br>';
        var_dump(false and false).'<br>';

        print "<br><br>OR<br><hr>";
        var_dump(true || true).'<br>';
        var_dump(true || false).'<br>';
        var_dump(false or true).'<br>';
        var_dump(false or false).'<br>';

        print "<br><br>XOR<br><hr>";
        var_dump(true xor true).'<br>';
        var_dump(true xor false).'<br>';
        var_dump(false xor true).'<br>';
        var_dump(false xor false).'<br>';
    ?>
</div>
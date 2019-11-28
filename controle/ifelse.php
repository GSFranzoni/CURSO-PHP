<div class="titulo">
    If/Else
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        echo "<h3>Operadores relacionais</h3><hr>";
        var_dump(1 == 1); //true
        var_dump(1 > 1); //false
        var_dump(1 >= 1); //true
        var_dump(1 < 1); //true
        var_dump(1 <= 1); //true
        var_dump(1 != 1); //false
        var_dump(1 <> 1); //false
        var_dump(111 == '111'); //true
        var_dump(111 === '111'); //false
        var_dump(111 != '111'); //false
        var_dump(111 !== '111'); //true 

        echo "<br><br><h3>Operadores relacionais no If/Else</h3><hr>";
        $var = 10;
        if($var<5) {
            echo "Menor que 5! <br>";
        }
        else if($var>=10) {
            echo "Maior igual a 10! <br>";
        }
        else {
            echo "Entre 5 e 10! <br>";
        }

        echo "<br><h3>Spaceship</h3>";
        var_dump(50 <=> 3); //1
        var_dump(1 <=> 1); //0
        var_dump(3 <=> 50); //-1

        echo "<br><br><h3>Valores pode ser V ou F</h3><hr>";
        var_dump(!!5); //true
        var_dump(!!0); //false
        var_dump(!!" "); //true
    ?>
</div>
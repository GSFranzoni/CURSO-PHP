<div class="titulo">
    Comparação
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $arr1 = ['nome' => 'Maria', 'idade' => 20];
        $arr2 = ['nome' => 'Maria', 'idade' => 20];
        $arr3 = ['idade' => 20, 'nome' => 'Maria'];
        var_dump($arr1 === $arr2);
        print '<br>';
        var_dump($arr1 == $arr3);
        print '<br>';
        var_dump($arr1 === $arr3);
    ?>
</div>
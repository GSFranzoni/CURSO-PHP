<div class="titulo">
    Operações - Array
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $dados_0 = [
            "nome" => "Jose",
            "idade" => 28
        ];
        $dados_1 = [
            "naturalidade" => "Fortaleza"
        ];
        $dados = $dados_0+$dados_1;
        print print_r($dados). '<br>';
        print is_array($dados). '<br>';
        print count($dados). '<br>';

        $indice = array_rand($dados);
        print "$indice = $dados[$indice] <br>";

        $merge = array_merge($dados_0, $dados_1); // concatena n arrays
        print print_r($merge);

        sort($merge); // ordena

        unset($dados["naturalidade"]); // remove indice "naturalidade"
        print print_r($dados). '<br>';

        unset($dados); // remove todos indices
        print var_dump($dados). '<br>';
    ?>
</div>
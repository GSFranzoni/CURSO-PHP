<div class="titulo">
    Arrays multidimensionais
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $dados = [
            "pessoa1" => [
                "nome" => "Roberto",
                "idade" => 28,
                "naturalidade" => "São Paulo"
            ],
            "pessoa2" => [
                "nome" => "Maria",
                "idade" => 25,
                "naturalidade" => "Bahia"
            ]
        ];
        print print_r($dados). '<br><br>';
        print print_r($dados["pessoa1"]).'<br><br>';
        print print_r($dados["pessoa2"]["nome"]).'<br><br>';

        $dados[] = [
            "nome" => "Guilherme",
            "idade" => 22,
            "naturalidade" => "Ubá"
        ];

        print print_r($dados). '<br><br>';
    ?>
</div>
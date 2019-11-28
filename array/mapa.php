<div class="titulo">
    Mapa
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $dados = array(
            "idade" => 22, 
            "nome" => "Guilherme",
            "peso" => 80.5
        );

        print print_r($dados). '<br>';

        print $dados["nome"]. '<br>';

        $lista[] = "adicionar";

        $lista["cidade"] = "Ubá";

        print print_r($lista). '<br>';
    ?>
</div>
<div class="titulo">
    Erros personalizados
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class FaixaEtariaException extends Exception{
            public function __construct($message, $code = 0, $previous = null) {
                parent::__construct($message, $code, $previous);
            }
        }

        function calcular($idade) {
            if($idade < 18) {
                throw new FaixaEtariaException("Ainda está muito longe!");
            }
            if($idade > 70) {
                throw new FaixaEtariaException("Já deveria estar aposentado!");
            }
            return 70-$idade;
        }

        $idades = [15, 30, 60, 80];

        foreach ($idades as $idade) {
            try {
                $tempo = calcular($idade);
                print "Resultado = $tempo anos<br>";
            }
            catch(Exception $e) {
                print "Não foi possível calcular idade para $idade anos.<br>";
                print "Motivo: {$e->getMessage()}<br>";
            }
            print '---------------------------------------------<br>';
        }
    ?>
</div>
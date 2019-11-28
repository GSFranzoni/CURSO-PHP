<div class="titulo">
    Desafio Data
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class Data {
            public $dia, $mes, $ano;

            function __construct($dia, $mes, $ano) {
                $this->dia = $dia;
                $this->mes = $mes;
                $this->ano = $ano;
                print 'Construiu! <br>';
            }

            function __destruct() {
                print 'Destruiu! <br>';
            }

            public function __toString() {
                return "{$this->dia}/{$this->mes}/{$this->ano}";
            }
        }
        $a = new Data(4, 7, 97);
        print $a. '<br>';
        unset($a);
        $a = new Data(4, 7, 97);
        print $a. '<br>';
        $a = NULL;
    ?>
</div>
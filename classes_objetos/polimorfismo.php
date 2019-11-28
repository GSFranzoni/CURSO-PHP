<div class="titulo">
    Polimorfimo
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        abstract class Comida {
            public $peso;
        }

        class Arroz extends Comida {
            function __construct($peso) {
                $this->peso = $peso;
            }
        }

        class Feijao extends Comida {
            function __construct($peso) {
                $this->peso = $peso;
            }
        }

        class Sorvete extends Comida {
            function __construct($peso) {
                $this->peso = $peso;
            }
        }

        class Pessoa {
            function __construct($peso) {
                $this->peso = $peso;
            }

            function comer(Comida $comida) {
                $this->peso += $comida->peso;
            }
        }

        $c1 = new Arroz(10);
        $p = new Pessoa(83);
        $p->comer($c1);
    ?>
</div>
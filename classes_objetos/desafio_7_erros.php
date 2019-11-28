<div class="titulo">
    Desafio 7 erros
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        interface Template {
            function metodo1();
            public function metodo2($param);
        }

        abstract class Abstrata implements Template {
            public function metodo3() {
                print 'Estou funcionando!<br>';
            }
        }

        class Concreta extends Abstrata {
            function __construct($param) {

            }

            public function metodo1() {
                print 'Metodo 1!<br>';
            }
            public function metodo2($param) {
                print 'Metodo 2!<br>';
            }
        }

        $ex = new Concreta('abc');
        $ex->metodo3();
    ?>
</div>
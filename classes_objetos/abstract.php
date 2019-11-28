<div class="titulo">
    Abstract
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        abstract class Abstrata {

            public abstract function metodo1();
            protected abstract function metodo2($param);
        }

        abstract class FilhaAbstrata extends Abstrata {
            public function metodo1() {
                print 'Executando metodo 1 extendido na classe abtrata<br>';
            }

            public function metodo2($param) {
                print 'Executando metodo 2 extendido na classe abtrata<br>';
            }

            public abstract function metodo3();
        }

        class Concreta extends FilhaAbstrata {
            public function metodo1() {
                print 'Executando metodo 1 extendido na classe concreta<br>';
            }
            /*public function metodo2($param) {
                print 'Executando metodo 2 extendido na classe concreta<br>';
            }*/
            public function metodo3() {
                print 'Executando metodo 3 extendido na classe concreta<br>';
            }
        }

        $con = new Concreta();
        $con->metodo1();
        $con->metodo2('param');
        $con->metodo3();
    ?>
</div>
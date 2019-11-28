<div class="titulo">
    Final
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        abstract class Abstrata {
            public abstract function metodo1();
            public final function metodo2() {
                print 'Função imutável! <br>';
            }
        }

        class Concreta extends Abstrata {
            function metodo1() {
                print 'Metodo 1! <br>';
            }
            /*function metodo2() {
                print 'Tentando fazer sobrescrita! <br>';
            }*/
        }

        final class Unica {
            public $attr1 = 'Atributo 1';
        }

        /*
        class Error extends Unica {
            // não pode extender uma classe final
        }
        */
    ?>
</div>
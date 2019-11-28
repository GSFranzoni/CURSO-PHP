<div class="titulo">
    Visibilidade
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class A {
            public $publico = 'public';
            protected $protegido = 'protected';
            private $privado = 'privado';

            function __construct() {
                
            }

            function __destruct() {
            }

            public function showA() {
                print "A) Público = {$this->publico}<br>";
                print "A) Protegido = {$this->protegido}<br>";
                print "A) Privado = {$this->privado}<br>";
            }
        }

        class B extends A {
            public function showB() {
                print "B) Público = {$this->publico}<br>";
                print "B) Protegido = {$this->protegido}<br>";
                print "B) Privado = {$this->privado}<br>";
            }
        }
        $b = new B();
        $b->showA();
        print '<br>';
        $b->showB();
    ?>
</div>
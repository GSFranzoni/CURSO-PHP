<div class="titulo">
    Membros estáticos
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class A {
            public $nao_static = 'variável de instância';
            public static $static = 'variável de classe';

            function __construct() {
                
            }

            function __destruct() {
            }

            public function showA() {
                print "Não estática = {$this->nao_static} <br>";
                print "Estática = ". self::$static ."<br>";
            }

            public static function showStaticA() {
                print 'Estática = '. self::$static. '<br>';
            }
        }

        $a = new A();
        $a->showA();
        $a->showStaticA();
        A::showStaticA();
        print A::$static;
    ?>
</div>
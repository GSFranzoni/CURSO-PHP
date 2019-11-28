<div class="titulo">
    Métodos mágicos
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class Pessoa {
            private $nome, $idade;

            function __construct($nome, $idade) {
                $this->nome = $nome;
                $this->idade = $idade;
                print 'Nasceu! <br>';
            }

            function __destruct() {
                print 'Morreu! <br>';
            }

            function __toString() {
                return "{$this->nome} tem {$this->idade} anos!";
            }

            function show() {
                print $this. '<br>';
            }

            public function __get($property) {
                if (property_exists($this, $property)) {
                    return $this->$property;
                }
            }
        
            public function __set($property, $value) {
                if (property_exists($this, $property)) {
                    $this->$property = $value;
                }
            }

            public function __call($method, $param) {
                print "Tentando executar o método {$method} com os parâmetros";
                print_r($param);
            }
        }
        $pessoa = new Pessoa("Guilherme", 22);
        $pessoa->show();
        print $pessoa. '<br>';
        print $pessoa->nome . '<br>';
    ?>
</div>
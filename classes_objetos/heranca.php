<div class="titulo">
    Herança
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class Pessoa {
            public $nome, $idade;

            function __construct(string $nome, int $idade) {
                $this->nome = $nome;
                $this->idade = $idade;
                print 'Pessoa criada! <br>';
            }

            function __destruct() {
                print 'Pessoa morreu! <br>';
            }

            public function __toString() {
                return "{$this->nome}, {$this->idade} anos";
            }
        }
        
        class Usuario extends Pessoa {
            public $login;

            function __construct(string $nome, int $idade, string $login) {
                parent::__construct($nome, $idade);
                $this->login = $login;
            }

            public function __toString() {
                return "@{$this->login}: {$this->nome}, {$this->idade} anos";
            }
        }

        $usuario = new Usuario("Guilherme", 22, "aln10453-1");
        print $usuario. '<br>';
    ?>
</div>
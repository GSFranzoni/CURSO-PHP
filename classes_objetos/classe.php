<div class="titulo">
    Classes & Objetos
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        class Cliente {
            public $nome, $snome, $idade;

            public function __toString() {
                return 'Nome: '. $this->nome;
            }
        }
        $c = new Cliente();
        $c->nome = "Olá"; 
        print $c;
    ?>
</div>
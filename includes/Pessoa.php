<?php  
    class Pessoa {
        public $nome;
        public $idade;

        public function __construct(string $nome, int $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
    }
?>
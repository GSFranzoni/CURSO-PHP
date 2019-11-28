<?php  
    include_once('Pessoa.php');
    class Usuario extends Pessoa {
        public $nome;

        public function __construct(string $nome, int $idade, string $login) {
            parent::__construct($nome, $idade);
            $this->login = $login;
        }
    }
?>
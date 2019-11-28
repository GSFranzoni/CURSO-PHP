<div class="titulo">
    Traits 02
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        trait Validacao {
            public function validarString($str) {
                return isset($str) and $str!='';
            }
        }

        trait ValidacaoMelhor {
            public function validarString($str) {
                return isset($str) and trim($str);
            }
        }

        class Usuario {
            use Validacao, ValidacaoMelhor {
                ValidacaoMelhor::validarString insteadOf Validacao;

                Validacao::validarString as validarStringSimples;
            }
        }

        $u = new Usuario();
        var_dump($u->validarString('    '));
    ?>
</div>
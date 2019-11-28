<div class="titulo">
    Traits 01
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        trait Validacao {
            public function validarString($str) {
                return isset($str) and $str!='';
            }
        }

        trait ValidacaoMelhor {
            public function validarStringMelhor($str) {
                return isset($str) and trim($str);
            }
        }

        class Usuario {
            use Validacao, ValidacaoMelhor;
        }

        $u = new Usuario();
        var_dump($u->validarString('    '));
        var_dump($u->validarStringMelhor('    '));
    ?>
</div>
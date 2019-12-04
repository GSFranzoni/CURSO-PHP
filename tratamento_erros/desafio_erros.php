<?php  
    namespace Desafio;

    use Exception;

    class DivisionException extends Exception {
        public function __construct($message, $code = 0, $previous = null) {
            parent::__construct($message, $code, $previous);
        }
    }

    function intdiv(int $x, int $y): int {
        if($y === 0) {
            throw new DivisionException("Erro: divisão por zero!");
        }
        $result = $x/$y;
        if(!is_int($result)) {
            throw new DivisionException("Erro: o resultado não é inteiro!");
        }
        return (int)$result;
    }
?>

<div class="titulo">
    Desafio Erros
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $valores = [
            [8, 2], [8, 3], [8, 0]
        ];

        foreach ($valores as $param) {
            try {
                $result = intdiv($param[0], $param[1]);
                print $result. '<br>';
            }
            catch(DivisionException $e) {
                print $e->getMessage(). "<br>";
            }
        }

        try {
            $result = \intdiv(8, 3);
            print $result. '<br>';
        }
        catch(DivisionException $e) {
            print $e->getMessage(). "<br>";
        }
    ?>
</div>